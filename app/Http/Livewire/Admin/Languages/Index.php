<?php

namespace App\Http\Livewire\Admin\Languages;

use App\Models\Language;
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
    }
    public function render()
    {
        $languages = Language::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.languages.index',['languages'=>$languages]);
    }
}
