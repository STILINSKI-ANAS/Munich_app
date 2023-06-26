<?php

namespace App\Http\Livewire\Admin\Etudiant;

use App\Models\Etudiant;
use Livewire\Component;

class Edit extends Component
{
    public $Etudiant;
    public $loading = 'block';

    public $Cours_options;
    public $otherCours = 'none';
    public $customCours = '';

    public $langue_options;
    public $otherlangue = 'none';
    public $customlangue = '';

    public $referral_options;
    public $otherreferral = 'none';
    public $customreferral = '';

    public $background = '';

    public $otherbackground;

    public function mount()
    {
        $etudiant = request()->etudiant;
        $this->Etudiant = Etudiant::findorfail($etudiant);
        $this->langue_options = $this->Etudiant->langue;
        $this->Cours_options = $this->Etudiant->Cours;
        $this->referral_options = $this->Etudiant->referral;
        $this->background = $this->Etudiant->background;
        $this->handlebackgroundChange();

//        dd($this->Etudiant);
    }

    public function handleCoursChange()
    {
        if ($this->Cours_options === 'autre') {
            $this->otherCours = 'block';
            $this->customCours = 'required';
        } else {
            $this->otherCours = 'none';
            $this->customCours = '';
        }
    }

    public function handlelangueChange()
    {
        if ($this->langue_options === 'autre') {
            $this->otherlangue = 'block';
            $this->customlangue = 'required';
        } else {
            $this->otherlangue = 'none';
            $this->customlangue = '';
        }
    }

    public function handlereferralChange()
    {
        if ($this->referral_options === 'autre') {
            $this->otherreferral = 'block';
            $this->customreferral = 'required';
        } else {
            $this->otherreferral = 'none';
            $this->customreferral = '';
        }
    }
    public function handlebackgroundChange()
    {
        if($this->background == 'oui'){
            $this->otherbackground = 'block';
        }else{
            $this->otherbackground = 'none';
        }
    }



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
        return view('livewire.admin.etudiant.edit');
    }
}
