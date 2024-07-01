<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Etudiant;
use App\Models\Exam;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function testPagination(Request $request)
    {
        $exams = Etudiant::paginate(10);

//        dd([
//            'class' => get_class($exams),
//            'methods' => get_class_methods($exams),
//        ]);

        $exams->appends($request->all());

        return view('test.pagination', compact('exams'));
    }
}
