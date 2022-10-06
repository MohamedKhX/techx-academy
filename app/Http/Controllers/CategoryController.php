<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Level;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        /*
         * We need to get three most popular
         * We need three most rated courses
         * 3 new released courses
         * */

        return view('categories.index', [
            'category' => $category,
            'levels' => Level::all(),

        ]);
    }

    public function get_CoursesToGetYouStarted()
    {
        return Course::where('rating', '>', 4)->take(3)->get();
    }
}
