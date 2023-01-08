<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Level;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('categories.show', [
            'coursesToGetYouStarted' => $category->courses()
                ->withCount(['reviews as rating_avg'], function ($query) {
                    $query->select(\DB::raw('avg(rating)'));
                })
                ->whereIn('id', $this->getCoursesToGetYouStarted($category->id))
                ->get(),
            'category' => $category,
        ]);
    }

    /*
     * It will fetch the most 3 enrollment courses
     * and it will fetch the most 3 rated courses
     * and it will delete the duplicates if there
     * and it will return an array with courses ids
     * */
    protected function getCoursesToGetYouStarted(int $categoryId)
    {
        $arr  = \DB::select("
             (select courses.id,
                  count(distinct enrollments.id) as enrollments,
                  AVG(rating) as avg_rating
            from courses
                inner join enrollments on courses.id = enrollments.course_id
                inner join reviews on courses.id = reviews.course_id
            where category_id = 1
            GROUP by courses.id
            order by enrollments desc limit 3)
            UNION
            (select courses.id,
                   count(distinct enrollments.id) as enrollments,
                   AVG(rating) as avg_rating
            from courses
                inner join enrollments on courses.id = enrollments.course_id
                inner join reviews on courses.id = reviews.course_id
            where category_id = 1
            GROUP by courses.id
            order by avg_rating desc limit 3)
        ");

        return collect($arr)
            ->map(function ($item) {
                return $item->id;
            })
            ->toArray();
    }
}
