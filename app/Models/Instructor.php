<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instructor extends Model
{
    use HasFactory;

    /*
     * Get the user that belongs to
     * */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /*
     * Get the courses that was made by this instructor
     * */
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
