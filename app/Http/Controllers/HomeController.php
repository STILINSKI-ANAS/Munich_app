<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Language;
use App\Models\Subscriber;
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


    public function privacyPolicy()
    {
        $languages = Language::all();
        $tests = Test::all();
        $categories = Category::all();
        return view('user.politiques')->with([
            'languages' => $languages,
            'tests' => $tests,
            'categories'=>$categories
        ]);
    }


    public function aboutUs()
    {
        $languages = Language::all();
        $tests = Test::all();
        $categories = Category::all();
        return view('user.aboutus')->with([
            'languages' => $languages,
            'tests' => $tests,
            'categories'=>$categories
        ]);

    }


    public function blog()
    {
        $languages = Language::all();
        $tests = Test::all();
        $categories = Category::all();
        return view('user.blog')->with([
            'languages' => $languages,
            'tests' => $tests,
            'categories'=>$categories
        ]);
    }

    public function blog1()
    {
        $languages = Language::all();
        $tests = Test::all();
        $categories = Category::all();
        return view('user.Blogs.blogDetails1')->with([
            'languages' => $languages,
            'tests' => $tests,
            'categories'=>$categories
        ]);
    }

    public function blog2()
    {
        $languages = Language::all();
        $tests = Test::all();
        $categories = Category::all();
        return view('user.Blogs.blogDetails2')->with([
            'languages' => $languages,
            'tests' => $tests,
            'categories'=>$categories
        ]);
    }

    public function blog3()
    {
        $languages = Language::all();
        $tests = Test::all();
        $categories = Category::all();
        return view('user.Blogs.blogDetails3')->with([
            'languages' => $languages,
            'tests' => $tests,
            'categories'=>$categories
        ]);
    }

    public function blog4()
    {
        $languages = Language::all();
        $tests = Test::all();
        $categories = Category::all();
        return view('user.Blogs.blogDetails4')->with([
            'languages' => $languages,
            'tests' => $tests,
            'categories'=>$categories
        ]);
    }
    public function blog5()
    {
        $languages = Language::all();
        $tests = Test::all();
        $categories = Category::all();
        return view('user.Blogs.blogDetails5')->with([
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

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        $subscriber = new Subscriber([
            'email' => $request->input('email'),
        ]);

        $subscriber->save();

        return redirect()->back()->with('success', 'Successfully subscribed to the newsletter.');
    }
}
