<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageFormRequest;
use App\Models\Language;
use Illuminate\Support\Facades\File;

class LanguaguesController extends Controller
{
    //
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
        //    dd($request);
        $validatedData = $request->validated();
        $Language = new Language;
        $Language->name = $validatedData['name'];
        $Language->description = $validatedData['description'];

        if ($request->hasFile('Image')){
            $file = $request->file('Image');
            $ext = $file->getClientOriginalName();
            $filename = time().'-'.$ext;
            $file->move('uploads/Language/', $filename);
            $Language->Image = $filename;
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

        if ($request->hasFile('Image')){
            $path = 'uploads/Language/'.$Language->image;
            if (File::exists($path)){
                File::delete($path);
            }
            $file = $request->Image;
            $ext = $file->getClientOriginalName();
            $filename = time().'-'.$ext;
            $file->move('uploads/Language/', $filename);
            $Language->image = $filename;
        }

        $Language->update();
        return redirect('/admin/Languages')->with('message','Language added');
//        return dd($request->all());
    }
}
