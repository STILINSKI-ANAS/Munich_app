<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageFormRequest;
use App\Models\Course;
use App\Models\Etudiant;
use App\Models\EtudiantCourse;
use App\Models\EtudiantTest;
use App\Models\Test;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        return view('admin.Orders.index');
    }
    public function create()
    {
        return view('admin.Orders.create');
    }

    public function store(Request $request)
    {
//        dd($request);
        if ($request->type == 'Cours'){

            EtudiantCourse::create(array_merge(
                ['etudiant_id' => $request['etudiant_id']],
                ['course_id'   => $request['course_id']]
            ));
        }else{
            EtudiantTest::create(array_merge(
                ['etudiant_id' => $request['etudiant_id']],
                ['test_id'   => $request['test_id']]
            ));
        }
        return view('admin.Orders.index');
    }
}
