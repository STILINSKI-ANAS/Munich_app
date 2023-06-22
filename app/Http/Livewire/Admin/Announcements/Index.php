<?php

namespace App\Http\Livewire\Admin\Announcements;

use App\Models\Announcement;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $announcement_id;

    public function destroyAnnouncement($announcement_id)
    {
        $this->$announcement_id = $announcement_id;
        $announcement = Announcement::find($this->$announcement_id);
        $path = 'uploads/Announcements/'. $announcement->image;
        if (File::exists($path)){
            File::delete($path);
        }
        $announcement->delete();
        session()->flash('message','Announcements deleted');
    }
    public function render()
    {
        $announcements = Announcement::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.announcements.index',['announcements'=>$announcements]);

    }

}
