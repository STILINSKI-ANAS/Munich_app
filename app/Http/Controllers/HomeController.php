<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $languages = Language::all();
        return view('user.home')->with([
            'languages' => $languages
        ]);
    }

    public function getLanguageCourses($languageId)
    {
        $languages = Language::all();
        $courses = Language::find($languageId)->courses;
        return view('user.Course.courses')->with([
            'courses' => $courses,
            'languages' => $languages
        ]);
    }

    public function getCourse($courseId)
    {
        $languages = Language::all();
        $course = Course::find($courseId);
        return view('user.Course.course-details')->with([
            'course' => $course,
            'languages' => $languages
        ]);
    }

    public function getLanguageTests($languageId)
    {
        $languages = Language::all();
        $tests = Language::find($languageId)->tests;
        return view('user.Test.tests')->with([
            'tests' => $tests,
            'languages' => $languages
        ]);
    }

    public function getTest($testId)
    {
        $languages = Language::all();
        $test = Test::find($testId);
        return view('user.Test.test-details')->with([
            'test' => $test,
            'languages' => $languages
        ]);
    }
}
