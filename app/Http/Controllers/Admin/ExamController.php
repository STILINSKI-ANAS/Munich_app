<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Exam;
use App\Models\Language;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{

    public function index(Request $request)
    {
        $query = Exam::query();

        // Filter by levels
        if ($request->filled('levels')) {
            $query->whereIn('level', $request->input('levels'));
        }

        // Filter by start and end date
        if ($request->filled('start_date')) {
            $query->whereDate('start_date', '>=', $request->input('start_date'));
        }
        if ($request->filled('end_date')) {
            $query->whereDate('end_date', '<=', $request->input('end_date'));
        }

        // Filter by max placements
        if ($request->filled('max_placements')) {
            $query->where('max_placements', '>=', $request->input('max_placements'));
        }

        // Add sorting if needed, before calling paginate
        $exams = $query->paginate(10);

        // Debugging output


        // Append the request parameters to the pagination links
        $exams->appends($request->except('page'));
        dd([
            'class' => get_class($exams),
            'methods' => get_class_methods($exams),
        ]);
        return view('admin.exams.index', compact('exams'));
    }
    public function testPagination(Request $request)
    {
        $exams = Exam::paginate(10);
        $exams->appends($request->all());

        return view('admin.exams.test', compact('exams'));
    }




    public function create()
    {
        return view('admin.exams.create');
    }

//    public function store(Request $request)
//    {
//        $request->validate([
//            'title' => 'required|string|max:255',
//            'level' => 'required|string|max:255',
//            'max_placements' => 'required|integer|min:1',
//            'start_date' => 'required|date',
//            'end_date' => 'required|date|after_or_equal:start_date',
//            'exam_date' => 'required|date|after_or_equal:end_date',
//            'exam_center' => 'required|string|max:255',
//            'exam_fee' => 'required|numeric|min:0',
//            'is_hidden' => 'boolean',
//            'image' => 'nullable|image|max:2048',
//            'language_id' => 'required|exists:languages,id',
//            'course_id' => 'required|exists:courses,id',
//        ]);
//
//        $data = $request->all();
//
//        if ($request->hasFile('image')) {
//            $data['image'] = $request->file('image')->store('images/exams');
//        }
//
//        Exam::create($data);
//
//        return redirect()->route('admin.exams.index')->with('success', 'Exam created successfully');
//    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'max_placements' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'exam_date' => 'required|date',
            'exam_center' => 'required|string|max:255',
            'exam_fee' => 'required|numeric',
        ]);

        Exam::create($request->all());

        return redirect()->route('admin.exams.index')->with('success', 'Examen créé avec succès.');
    }

    public function edit($id)
    {
        $exam = Exam::findOrFail($id);

        return view('admin.exams.edit', compact('exam'));
    }

//    public function update(Request $request, Exam $exam)
//    {
//        $request->validate([
//            'title' => 'required|string|max:255',
//            'level' => 'required|string|max:255',
//            'max_placements' => 'required|integer|min:1',
//            'start_date' => 'required|date',
//            'end_date' => 'required|date|after_or_equal:start_date',
//            'exam_date' => 'required|date|after_or_equal:end_date',
//            'exam_center' => 'required|string|max:255',
//            'exam_fee' => 'required|numeric|min:0',
//            'is_hidden' => 'boolean',
//            'image' => 'nullable|image|max:2048',
//            'language_id' => 'required|exists:languages,id',
//            'course_id' => 'required|exists:courses,id',
//        ]);
//
//        $data = $request->all();
//
//        if ($request->hasFile('image')) {
//            $data['image'] = $request->file('image')->store('images/exams');
//        }
//
//        $exam->update($data);
//
//        return redirect()->route('admin.exams.index')->with('success', 'Exam updated successfully');
//    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'max_placements' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'exam_date' => 'required|date',
            'exam_center' => 'required|string|max:255',
            'exam_fee' => 'required|numeric',
        ]);

        $exam = Exam::findOrFail($id);
        $exam->update($request->all());

        return redirect()->route('admin.exams.index')->with('success', 'Examen mis à jour avec succès.');
    }
    public function destroy($id)
    {
        $exam = Exam::findOrFail($id);
        $exam->delete();

        return redirect()->route('admin.exams.index')->with('success', 'Examen supprimé avec succès.');
    }
}
