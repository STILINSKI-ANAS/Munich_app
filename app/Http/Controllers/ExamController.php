<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Exam;
use App\Models\Language;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    //
    public function index()
    {
        $languages = Language::all();
        $tests = Test::where('is_hidden', false)->get();
        $categories = Category::all();
        $exams = Exam::all();
        // Fetch distinct levels and their counts
        $levels = Exam::select('level', DB::raw('count(*) as total'))
            ->groupBy('level')
            ->get();

        return view('user.exams.index', compact('exams', 'levels','tests','categories','languages'));
    }



}
