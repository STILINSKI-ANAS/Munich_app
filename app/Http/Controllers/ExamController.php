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
        $exams = Exam::all();
//        $exams = Exam::paginate(10); // Paginate the exams
        $levels = Exam::select('level', DB::raw('count(*) as total'))
            ->groupBy('level')
            ->get();


        return view('user.exams.index', compact('exams', 'levels'));
    }



}
