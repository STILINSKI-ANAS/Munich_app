<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseFormRequest;
use App\Models\Course;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CoursController extends Controller
{
    
    public function index()
    {
        return view('admin.Course.index');
    }


    public function create()
    {
        $languages = Language::all();
        return view('admin.Course.create')->with([
            'languages' => $languages
        ]);
    }


    public function store(CourseFormRequest $request)
    {
        $validatedData = $request->validated();
        $course = new Course();
        $course->content = $validatedData['content'];
        $course->level = $validatedData['level'];
        $course->overview = $validatedData['overview'];
        $course->price = $validatedData['price'];
        $course->time = $validatedData['time'];
        $course->language_id = $validatedData['language_id'];

        if ($request->hasFile('Image')){
            $file = $request->file('Image');
            $ext = $file->getClientOriginalName();
            $filename = time().'-'.$ext;
            $file->move('uploads/Course/', $filename);
            $course->image = $filename;
        }
        $course->save();
        return redirect('/admin/Course')->with('success','Course added successfully');
    }


    public function edit($course)
    {
        $languages = Language::all();
        return view('admin.Course.edit')->with([
            'languages' => $languages,
            'course' => Course::find($course)
        ]);
    }


    public function update(CourseFormRequest $request, $course)
    {
        $course = Course::findOrFail($course);
        $validatedData = $request->validated();
        $course->content = $validatedData['content'];
        $course->level = $validatedData['level'];
        $course->overview = $validatedData['overview'];
        $course->price = $validatedData['price'];
        $course->time = $validatedData['time'];
        $course->language_id = $validatedData['language_id'];
        if ($request->hasFile('Image')){
            $path = 'uploads/Course/'.$course->image;
            if (File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('Image');
            $ext = $file->getClientOriginalName();
            $filename = time().'-'.$ext;
            $file->move('uploads/course/', $filename);
            $course->image = $filename;
        }
        $course->update();
        return redirect('/admin/Course')->with('success','Course updated successfully');
    }
}
