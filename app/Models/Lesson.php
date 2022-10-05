<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lesson extends Model
{
    use HasFactory;

    /*
     * Get the courses the lesson belongs to.
     * */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /*
     * Get the user notes for this lesson.
     * */
    public function notes(User $user): Collection
    {
        return $this->hasMany(Note::class)->where('user_id', $user->id)->get();
    }
}
