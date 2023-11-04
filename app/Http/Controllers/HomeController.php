<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $languages = Language::all();
        $tests = Test::all();
        $categories = Category::all();
        $annocements = Announcement::all();
//        $this->addurltosession($request);
        return view('user.home')->with([
            'languages' => $languages,
            'tests' => $tests,
            'categories' => $categories,
            'annocements' => $annocements
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
            'categories' => $categories
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
            'categories' => $categories
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
            'categories' => $categories
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
            'categories' => $categories
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
            'categories' => $categories
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
            'categories' => $categories
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
            'categories' => $categories
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
            'categories' => $categories
        ]);
    }


    public function getLanguageCourses($languageName)
    {
        $languages = Language::all();
        $courses = Language::Where('name', $languageName)->first()->courses;
        return view('user.Course.courses')->with([
            'courses' => $courses,
            'languages' => $languages
        ]);
    }

    public function getCourse($courseLevel)
    {
        $languages = Language::all();
        $course = Course::Where('level', $courseLevel)->first();
//        $course = $course->toarray();
//        dd($course->level);
        return view('user.Course.course-details')->with([
            'course' => $course,
            'languages' => $languages
        ]);
    }

    public function getLanguageTests($languageName, Request $request)
    {
        $languages = Language::all();
        $lang = Language::Where('name', $languageName)->first();
        $tests = $lang ? $lang->tests : [];
//        dump($tests);
//        dd($tests);
//        $this->addurltosession($request);
        return view('user.Test.tests')->with([
            'tests' => $tests,
            'languages' => $languages,
            'language' => $languageName,
        ]);
    }

    public function addurltosession(Request $request)
    {
        $previousUrls = $request->session()->get('previous_urls', []);
        $previousUrls[] = url()->previous();
        $request->session()->put('previous_urls', $previousUrls);
        dump($previousUrls);
        // Rest of your logic
    }

    public function getTest($testLevel, Request $request)
    {
        $languages = Language::all();
        $test = Test::where('level', $testLevel)
            ->with('course') // Eager load the course relationship
            ->first();
//        dd($test->course);
//        $this->addurltosession($request);
        return view('user.Test.test-details')->with([
            'test' => $test,
            'languages' => $languages
        ]);
    }

    public function createDummyTests()
    {

//        $test = Test::findOrFail(51);

        // Convert the JSON column back to an array
//        $features = json_decode($test->features, true);

        // Create the first dummy test
        $test1 = Test::create([
            'level' => 'Intermediate',
            'name' => 'Dummy Test 1',
            'overview' => 'This is the overview for dummy test 1.',
            'content' => 'This is the content for dummy test 1.',
            'time' => '60 minutes',
            'price' => '$10',
            'language_id ' => '2',
            'features' => '["Évaluation axée sur le monde des affaires","Reconnaissance par les entreprises et les institutions","Évaluation normalisée","Comparabilité internationale","Développement personnel et professionnel"]',

        ]);

        // Create the second dummy test
//        $test2 = Test::create([
//            'level' => 'Advanced',
//            'name' => 'Dummy Test 2',
//            'overview' => 'This is the overview for dummy test 2.',
//            'content' => 'This is the content for dummy test 2.',
//            'time' => '90 minutes',
//            'price' => '$15',
//            'language_id '=> '2',
//            'features' => json_encode(['0' => 'Feature 1', '1' => 'Feature 2', '2' => 'Feature 3']),
//        ]);

        return response()->json([
            'message' => 'Dummy tests created successfully.',
            'features' => [$test1->features],
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
