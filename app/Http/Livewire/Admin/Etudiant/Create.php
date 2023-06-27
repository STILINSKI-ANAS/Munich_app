<?php

namespace App\Http\Livewire\Admin\Etudiant;

use Livewire\Component;

class Create extends Component
{
    public $loading = 'block';
    public function firstrender()
    {
        if ($this->loading === 'none'){
            $this->loading = 'block';
        }else{
            $this->loading = 'none';
        }
    }
    public function render()
    {
        return view('livewire.admin.etudiant.create');
    }
}
