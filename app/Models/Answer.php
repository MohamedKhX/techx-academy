<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    use HasFactory;

    /*
     * Get the user who answered the question.
     * */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /*
     * Get the question, where the answer was written.
     * */
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
