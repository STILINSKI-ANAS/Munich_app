<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguaguesController extends Controller
{
    //
    public function index()
    {
        return view('admin.Languages.index');
    }
    public function create()
    {
        return view('admin.Languages.create');
    }
    public function store()
    {
        return view('admin.Languages.store');
    }
    public function edit(Language $language)
    {
        return view('admin.Languages.store');
    }
    public function update()
    {
        return view('admin.Languages.store');
    }
}
