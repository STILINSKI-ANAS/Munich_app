<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageFormRequest;
use App\Models\Language;
use Illuminate\Support\Facades\File;

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
    public function store(LanguageFormRequest $request)
    {
        $validatedData = $request->validated();
        $Language = new Language;
        $Language->name = $validatedData['name'];
        $Language->description = $validatedData['description'];
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'-'.$ext;
            $file->move('uploads/category/', $filename);
            $Language->image = $validatedData['image'];
        }
        $Language->save();
        return redirect('/admin/Languages')->with('message','Language added');
    }
    public function edit(Language $language)
    {
        return view('admin.languages.edit',compact('language'));
    }
    public function update(LanguageFormRequest $request, $language)
    {
//        dd($request);
        $Language = Language::findOrFail($language);
        $validatedData = $request->validated();
        $Language->name = $validatedData['name'];
        $Language->description = $validatedData['description'];
        if ($request->hasFile('image')){
            $path = 'uploads/language/'.$language->image;
            if (File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'-'.$ext;
            $file->move('uploads/language/', $filename);
            $Language->image = $validatedData['image'];
        }
        $Language->update();
        return redirect('/admin/Languages')->with('message','Language added');
    }

}
