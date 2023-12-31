<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestFormRequest;
use App\Models\Course;
use App\Models\Language;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class TestsController extends Controller
{
    public function index()
    {
        return view('admin.Test.index');
    }


    public function create()
    {
        $languages = Language::all();
        $courses = Course::all();
        return view('admin.Test.create')->with([
            'languages' => $languages,
            'courses' => $courses,
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
        $test->max_placements = $validatedData['max_placements'];
        $test->time = $validatedData['time'];
        $test->content = $validatedData['content'];
        $test->language_id = $validatedData['language_id'];
        $test->features = $validatedData['features'];
        $test->start_date = $validatedData['start_date'];
        $test->end_date = $validatedData['end_date'];

        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            $ext = $file->getClientOriginalName();
            $filename = time() . '-' . $ext;
            $file->move('uploads/Test/', $filename);
            $test->Image = $filename;
        }
        $test->save();
        return redirect('/admin/Test')->with('message', 'Test added successfully');
    }


    public function edit($test)
    {
        $languages = Language::all();
        $courses = Course::all();
        return view('admin.Test.edit', compact('test'))->with([
            'languages' => $languages,
            'test' => Test::find($test),
            'courses' => $courses,
        ]);
    }


    public function update(TestFormRequest $request, $test)
    {

        $test = Test::findOrFail($test);

        $validatedData = $request->validated();
//        dd($validatedData['start_date']);
        $test->name = $validatedData['name'];
        $test->level = $validatedData['level'];
        $test->overview = $validatedData['overview'];
        $test->price = $validatedData['price'];
        $test->time = $validatedData['time'];
        $test->content = $validatedData['content'];
        $test->max_placements = $validatedData['max_placements'];
        $test->language_id = $validatedData['language_id'];
        $test->course_id = $validatedData['course_id'];
        $test->features = $validatedData['features'];
        $test->start_date = $validatedData['start_date'];
        $test->end_date = $validatedData['end_date'];
        $test->is_hidden = $request->has('is_hidden');

        if ($request->hasFile('Image')) {
            $path = 'uploads/Test/' . $test->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->Image;
            $ext = $file->getClientOriginalName();
            $filename = time() . '-' . $ext;
            $file->move('uploads/Test/', $filename);
            $test->image = $filename;
        }

        $test->update();
//        dd($test);
        return redirect('/admin/Test')->with('message', 'Test added successfully');
    }
}
