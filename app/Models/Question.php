<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    /*
     * Get the user who asked this question
     * */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /*
     * Get the lesson where this question was asked
     * */
    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }

    /*
     * Get the answers for this question
     * */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }
}
