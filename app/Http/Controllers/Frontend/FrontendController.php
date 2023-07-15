<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Language;

use App\Models\Test;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $tests = Test::all();
        $languages = Language::all();

        return view('frontend.index')->with([
            'categories' => $categories,
            'tests' => $tests,
            'languages' => $languages,
        ]);
    }
}
