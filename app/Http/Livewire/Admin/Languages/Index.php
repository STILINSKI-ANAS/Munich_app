<?php

namespace App\Http\Livewire\Admin\Languages;

use App\Models\Language;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $language_id;

    public function destroyLanguage($language_id)
    {
//        dd($language_id);
        $this->language_id = $language_id;
        $language = Language::find($this->language_id);
        $path = 'uploads/language/'. $language->image;
        if (File::exists($path)){
            File::delete($path);
        }
        $language->delete();
        session()->flash('message','language deleted');
    }
    public function render()
    {
        $languages = Language::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.languages.index',['languages'=>$languages]);
    }
}
