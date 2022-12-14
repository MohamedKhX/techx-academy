<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    /*
     * Get the user who wrote the review.
     * */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /*
     * Get the courses that belong to this review.
     * */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
