<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use App\Models\Test;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $languages = Language::all();
        $tests = Test::all();
        $categories = Category::all();
        return view('user.home')->with([
            'languages' => $languages,
            'tests' => $tests,
            'categories'=>$categories
        ]);
    }

    public function getLanguageCourses($languageName)
    {
        $languages = Language::all();
        $courses = Language::Where('name',$languageName)->first()->courses;
        return view('user.Course.courses')->with([
            'courses' => $courses,
            'languages' => $languages
        ]);
    }

    public function getCourse($courseLevel)
    {
        $languages = Language::all();
        $course = Course::Where('level',$courseLevel)->first();
//        $course = $course->toarray();
//        dd($course->level);
        return view('user.Course.course-details')->with([
            'course' => $course,
            'languages' => $languages
        ]);
    }

    public function getLanguageTests($languageName)
    {
        $languages = Language::all();
        $tests = Language::Where('name',$languageName)->first()->tests;
//        dd($tests);
        return view('user.Test.tests')->with([
            'tests' => $tests,
            'languages' => $languages
        ]);
    }

    public function getTest($testLevel)
    {
        $languages = Language::all();
        $test = Test::Where('level',$testLevel)->first();
        return view('user.Test.test-details')->with([
            'test' => $test,
            'languages' => $languages
        ]);
    }
}
