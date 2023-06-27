<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnnouncementFormRequest;
use App\Models\Announcement;
use App\Models\Language;
use Illuminate\Support\Facades\File;

class AnnouncementsController extends Controller
{
    public function index()
    {
        return view('admin.Announcements.index');
    }

    public function create()
    {
        $languages = Language::all();
        return view('admin.Announcements.create', compact('languages'));
    }

    public function store(AnnouncementFormRequest $request)
    {
        $validatedData = $request->validated();
        $language = Language::findOrFail($validatedData['language_id']);

        $announcement = $language->announcements()->create([
            'language_id' => $validatedData['language_id'],
            'titre' => $validatedData['titre'],
            'description' => $validatedData['description']
        ]);

        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            $ext = $file->getClientOriginalName();
            $filename = time() . '-' . $ext;
            $file->move('uploads/Announcements/', $filename);
            $announcement->image = $filename;
            $announcement->save();
        }

        return redirect('/admin/Announcements')->with('message', 'Announcement added');
    }

    public function edit($announcement_id)
    {
        $languages = Language::all();
        $announcement = Announcement::findOrFail($announcement_id);

        return view('admin.announcements.edit', compact('languages', 'announcement'));
    }

    public function update(AnnouncementFormRequest $request, $announcement_id)
    {
        $validatedData = $request->validated();

        $announcement = Announcement::findOrFail($announcement_id);

        if ($announcement) {
            $announcement->update([
                'language_id' => $validatedData['language_id'],
                'titre' => $validatedData['titre'],
                'description' => $validatedData['description']
            ]);

            if ($request->hasFile('Image')) {
                $path = 'uploads/Announcements/' . $announcement->image;
                if (File::exists($path)) {
                    File::delete($path);
                }
                $file = $request->file('Image');
                $ext = $file->getClientOriginalName();
                $filename = time() . '-' . $ext;
                $file->move('uploads/Announcements/', $filename);
                $announcement->image = $filename;
                $announcement->save();
            }

            return redirect('/admin/Announcements')->with('message', 'Announcement updated');
        } else {
            return redirect('/admin/Announcements')->with('message', 'No such announcement found');
        }
    }
}
