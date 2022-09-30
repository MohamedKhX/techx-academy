<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
      'what_you_will_learn' => 'json',
      'requirements' => 'json'
    ];

    /*
     * Get the lessons for the course.
     * */
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    /*
     * Get the instructor who created this course
     * */
    public function instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class);
    }

    /*
     * Get course level
     * */
    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    /*
     * Get the category that belongs to
     * */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
