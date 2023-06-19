<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestFormRequest;
use App\Models\Language;
use App\Models\Test;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function index()
    {
        return view('admin.Test.index');
    }


    public function create()
    {
        $languages = Language::all();
        return view('admin.Test.create')->with([
            'languages' => $languages
        ]);
    }


    public function store(TestFormRequest $request)
    {
        $validatedData = $request->validated();
        $test = new Test();
        $test->name = $validatedData['name'];
        $test->level = $validatedData['level'];
        $test->overview = $validatedData['overview'];
        $test->price = $validatedData['price'];
        $test->time = $validatedData['time'];
        $test->content = $validatedData['content'];
        $test->save();
        return redirect('/admin/Test')->with('message','Test added successfully');
    }


    public function edit(Test $test)
    {
        $languages = Language::all();
        return view('admin.Test.edit',compact('test'))->with([
            'languages' => $languages
        ]);
    }


    public function update(TestFormRequest $request, $test)
    {
        $test = Test::findOrFail($test);
        $validatedData = $request->validated();
        $test->name = $validatedData['name'];
        $test->level = $validatedData['level'];
        $test->overview = $validatedData['overview'];
        $test->price = $validatedData['price'];
        $test->time = $validatedData['time'];
        $test->content = $validatedData['content'];
        $test->update();
        return redirect('/admin/Test')->with('message','Test added successfully');
    }
}
