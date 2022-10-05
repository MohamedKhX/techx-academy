<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'categories' => Category::all(),
            'courses' => Course::all(),
            'instructors' => Instructor::all()
        ]);
    }
}
