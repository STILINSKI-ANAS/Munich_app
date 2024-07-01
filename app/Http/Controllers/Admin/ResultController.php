<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ResultsExport;
use App\Exports\ResultsTemplateExport;
use App\Imports\ResultsImport;
use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::with('convocation.registration', 'convocation.exam')->paginate(10);
        return view('admin.results.index', compact('results'));
    }

    public function export()
    {
        return Excel::download(new ResultsExport, 'results.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx',
        ]);

        Excel::import(new ResultsImport, $request->file('file'));

        return redirect()->route('admin.results.index')->with('success', 'Les résultats ont été importés avec succès.');
    }

    public function downloadTemplate()
    {
        return Excel::download(new ResultsTemplateExport, 'results_template.xlsx');
    }
}
