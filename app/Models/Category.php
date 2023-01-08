<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use LaravelIdea\Helper\App\Models\_IH_Course_QB;

class Category extends Model
{
    use HasFactory;

    /**
     * Bootstrap the model and its traits.
     *
     * @return void
     */
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = \Str::slug($category->name);
        });
    }

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $withCount = [
        'courses',
        'topics',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'topics:name',
    ];

    /*
     * Get Topics related to the category.
     * */
    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class);
    }

    /*
     * Get the courses that belong to this category.
     * */
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    /*
     * Get all learners count by this category.
     * */
    public function getLearnersCount(): int
    {
        return $this->courses()
            ->join('enrollments', 'courses.id', '=', 'enrollments.course_id')
            ->count();
    }

}
