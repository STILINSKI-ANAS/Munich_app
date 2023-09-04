<?php

namespace App\Http\Livewire\Admin\Etudiant;

use App\Http\Requests\EtudiantRequest;
use App\Models\Course;
use App\Models\Etudiant;
use App\Models\Language;
use App\Models\Test;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $loading = 'block';

    public $nom;
    public $prenom;
    public $cin;
    public $tel;
    public $dateNaissance;
    public $email;
    public $addresse;
    public $Image;


    public $status_pro;
    public $referral_options;
    public $referral;
    public $background = 'non';
    public $time_learning;
    public $where_learning;
    public $period_learning;

    public $successMessage;

    public $languages = [];
    public $courses = [];
    public $tests = [];


    public $otherbackground = 'none';


    public $otherreferral = 'none';
    public $customreferral = '';
    public $cusreferral = '';

    public $personnel = 'active show';
    public $motifsNiveau = '';
    public $inscription = '';
    public $paiement = '';

    public $personnelBtn = 'active';
    public $motifsNiveauBtn = '';
    public $inscriptionBtn = '';
    public $paiementBtn = '';

    public $image;


    protected $rules = [
            //
            'nom'=>'required|min:6',
            'prenom'=>'required',
            'cin'=>'required',
            'tel'=>'required',
            'addresse'=>'required',
            'dateNaissance'=>'required',
            'email'=>'required|email',
            'Image' => 'nullable',

            'status_pro' => 'nullable|string',
            'referral_options' => 'nullable|string',
            'referral' => 'nullable|string',
            'cusreferral' => 'nullable|string',
            'background' => 'nullable|string',
            'time_learning' => 'nullable|string',
            'where_learning' => 'nullable|string',
            'period_learning' => 'nullable|string',
        ];

    public function mount()
    {
        $this->languages = Language::all();
        $this->courses = Course::all();
        $this->tests = Test::all();
    }

    public function updated($propertyName)
    {
//        dump($this->nom);
        if($this->otherreferral == 'none'){
            $this->referral = $this->referral_options;
        }else{
            $this->referral = $this->cusreferral;
        }
//        dump($this->referral);
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();
        $this->updatedImage();

        if($this->cusreferral == ''){
            $this->referral = $this->referral_options;
        }else{
            $this->referral = $this->cusreferral;
        }
        Etudiant::create($validatedData);


        $this->successMessage = 'Data saved successfully';
        // Reset form fields
//        $this->reset(['nom', 'prenom', 'cin', 'tel', 'dateNaissance', 'email', 'addresse', 'Image']);

    }

    public function handlebackgroundChange()
    {
        if($this->background == 'oui'){
            $this->otherbackground = 'block';
        }else{
            $this->otherbackground = 'none';
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

    public function tabchange($tabName)
    {
        switch ($tabName) {
            case 'personnel':
                $this->personnel = 'active show';
                $this->motifsNiveau = '';
                $this->inscription = '';
                $this->paiement = '';

                $this->personnelBtn = 'active';
                $this->motifsNiveauBtn = '';
                $this->inscriptionBtn = '';
                $this->paiementBtn = '';
                break;
            case 'motifsNiveau':
                $this->personnel = '';
                $this->motifsNiveau = 'active show';
                $this->inscription = '';
                $this->paiement = '';

                $this->personnelBtn = '';
                $this->motifsNiveauBtn = 'active';
                $this->inscriptionBtn = '';
                $this->paiementBtn = '';
                break;
            case 'inscription':
                $this->personnel = '';
                $this->motifsNiveau = '';
                $this->inscription = 'active show';
                $this->paiement = '';

                $this->personnelBtn = '';
                $this->motifsNiveauBtn = '';
                $this->inscriptionBtn = 'active';
                $this->paiementBtn = '';
                break;
            case 'paiement':
                $this->personnel = '';
                $this->motifsNiveau = '';
                $this->inscription = '';
                $this->paiement = 'active show';

                $this->personnelBtn = '';
                $this->motifsNiveauBtn = '';
                $this->inscriptionBtn = '';
                $this->paiementBtn = 'active';
                break;
            default:
                // Handle any other cases or defaults here
                break;
        }
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'nullable|image|max:2048', // Adjust validation rules as needed
        ]);

        // Generate a unique filename for the image
        $filename = time() . '_' . $this->image->getClientOriginalName();

        // Store the image in the public/images directory
        $this->image->storeAs('public/uploads/etudiant/', $filename);

        $this->Image =  $filename;
    }

    public function render()
    {
        return view('livewire.admin.etudiant.create');
    }
}
