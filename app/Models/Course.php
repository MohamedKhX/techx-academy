<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

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

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'level:id,name',
        'instructor.user:id,name',
    ];

    /**
     * The relationship counts that should be eager loaded on every query.
     *
     * @var array
     */
    protected $withCount = [
        'lessons',
        'reviews'
    ];

    /*
     * Get the lessons for the courses.
     * */
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    /*
     * Get the instructor who created this courses.
     * */
    public function instructor(): BelongsTo
    {
        return $this->belongsTo(Instructor::class);
    }

    /*
     * Get courses level.
     * */
    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    /*
     * Get the category that belongs to.
     * */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /*
     * Get courses reviews.
     * */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    /*
     * Get course enrollments.
     * */
    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }

    /*
     * Get avg rating for the course.
     * */
    public function rating(): Attribute
    {
        return Attribute::get(function() {
            $avg_rating = $this->reviews()
                ->select(DB::raw('avg(rating) as rating'))
                ->join('courses', 'reviews.course_id', '=', 'courses.id')
                ->first()
                ->rating;

            return number_format($avg_rating, 1);
        });
    }

    /*
     * Get formatted rating.
     * */
    public function formatRating($rating): string
    {
        return number_format($rating, 1);
    }

    /*
     * Generate stars html.
     * */
    public function getStarsIcons($rating, $starColor = 'text-primary'): string
    {
        $html = '';

        $number = $this->getStarsCount($rating);

        for ($i = 1; $i <= $number; $i++) {
            $html .= "<i class='material-icons ${starColor}'>star</i>";
        }

        $theRest = 5 - $number;

        if(is_float($theRest)) {
            $html .= "<i class='material-icons'><span class=' ${starColor}'>st</span>ar</i>";
        }

        for ($i = 1; $i <= $theRest; $i++) {
            $html .= '<i class="material-icons">star</i>';
        }

        return $html;
    }

    /*
     * Convert the number for e.g. from 1.3 to 1.5
     * [1.0, 1.1, 1.2, 1.3, 1.4] to 1
     * [1.5, 1.6, 1.7, 1.8, 1.9] to 1.5.
     * */
    public function getStarsCount($rating): string
    {
        $a = [0,1,2,3,4];
        $b = [5,6,7,8,9];

        $number = $this->formatRating($rating);

        $finalNumber = explode('.', $number);

        if(! isset($finalNumber[1])) {
            return $finalNumber[0];
        }

        if(in_array($finalNumber[1], $a)) {
            unset($finalNumber[1]);
        } elseif(in_array($finalNumber[1], $b)) {
            $finalNumber[1] = 5;
        }

        return join('.', $finalNumber);
    }
}
