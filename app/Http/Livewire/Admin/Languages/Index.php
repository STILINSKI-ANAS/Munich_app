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
    public $name;
    public $showSubmitButton = 'hidden';
    public $languages = [];
    public $idLang;
    public function mount()
    {
        $this->languages = Language::all();
    }
    public function createButton($idLang){
        $this->idLang = $idLang;
        $this->showSubmitButton = '';
    }

    public function hide_validation()
    {
        $this->idLang = 0;
        $this->showSubmitButton = 'hidden';
    }

    public function destroyLanguage()
    {
        $language = Language::find($this->idLang);
//        dd($language);
        if ($language->Image){
            $path = 'uploads/language/'. $language->Image;
            File::delete($path);
        }
        $language->delete();
        $this->showSubmitButton = 'hidden';
        $this->mount();
    }
    public function render()
    {
//        $languages = Language::orderBy('id','DESC')->paginate(50);
        return view('livewire.admin.languages.index');
    }
}
