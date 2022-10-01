<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

class Note extends Model
{
    use HasFactory;

    const SECONDS_IN_ONE_HOUR = 3600;

    /*
     * Get the user that created this note
     * */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /*
     * Get the lesson where this note was created
     * */
    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }

    /*
     * Convert from seconds to the proper time
     * */
    public function at(): Attribute
    {
        return Attribute::get(function ($value) {

            if($value >= (static::SECONDS_IN_ONE_HOUR)) {
                return gmdate('H:i:s', $value);
            }

            return gmdate('i:s', $value);
        });
    }
}
