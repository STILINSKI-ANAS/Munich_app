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
        $test->price = $validatedData['price'];
        $test->max_placements = $validatedData['max_placements'];
        $test->time = $validatedData['time'];
        $test->language_id = $validatedData['language_id'];
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
        // Confirmation of receiving the form submission

        // Retrieving the test by its ID
        $test = Test::findOrFail($test);

        dd($test); // Debugging to check if the test model is fetched correctly

        // Validating the submitted data
        $validatedData = $request->validated();


        // Update the test attributes with the validated data
        $test->update([
            'name' => $validatedData['name'],
            'level' => $validatedData['level'],
            'price' => $validatedData['price'],
            'time' => $validatedData['time'],
            'max_placements' => $validatedData['max_placements'],
            'language_id' => $validatedData['language_id'],
            'course_id' => $validatedData['course_id'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
            'is_hidden' => $request->has('is_hidden')
        ]);

        dd('Test updated successfully!'); // Debugging to check if the update operation is successful


        // Handling the update of the test image
        if ($request->hasFile('Image')) {
            $path = 'uploads/Test/' . $test->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('Image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move('uploads/Test/', $filename);
            $test->update(['image' => $filename]);
        }

        // Redirect after updating
        return redirect('/admin/Test')->with('message', 'Test mis à jour avec succès');
    }


}
