<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Exam;
use App\Models\Language;
use App\Models\Test;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    //
    public function index()
    {
        $languages = Language::all();
        $tests = Test::where('is_hidden', false)->get();
        $categories = Category::all();
        $exams = Exam::all();
        return view('user.exams.index')->with([
            'languages' => $languages,
            'tests' => $tests,
            'categories' => $categories,
            'exams' => $exams
        ]);
    }
}
