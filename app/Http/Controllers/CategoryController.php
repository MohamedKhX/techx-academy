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
            'coursesToGetYouStarted' => $category->courses()->withCount(['reviews as rating_avg' => function($query) {
                $query->select(\DB::raw('avg(rating)'));
            }])->get(),
            'category' => $category,
        ]);
    }
}
