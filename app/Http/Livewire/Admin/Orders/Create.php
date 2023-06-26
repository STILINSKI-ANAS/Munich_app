<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\Course;
use App\Models\Etudiant;
use App\Models\Test;
use Livewire\Component;

class Create extends Component
{
    public $courses = [];
    public $tests = [];
    public $etudiants = [];
    public $methodesPay = ['CIH','Wafacash','Cash','CashPlus'];
    public $statuss = ['Valider','en attent','Echec'];
    public $selectedProduct = '';
    public $selectedCourse = '';
    public $selectedTest = '';
    public $totalPay = 0;
    public $size = 'A';
    public $idProduct;
    public $loading = 'block';

    public $produit_options = '-- Select --';
    public $Coursarea = 'none';
    public $Testarea = 'none';

    public $CoursInput = '';
    public $TestInput = '';

    public $mPayDisplay = 'block';
    public $mPayInput = 'required';

//    public $TestInput = '';



    public function handleproduitChange()
    {
        $this->selectedProduct = '';
        $this->totalPay = 0;
        if ($this->produit_options === 'Cours'){
            $this->Coursarea = 'block';
            $this->Testarea = 'none';

            $this->CoursInput = 'required';
            $this->TestInput = '';

        }elseif ($this->produit_options === 'Test'){
            $this->Coursarea = 'none';
            $this->Testarea = 'block';

            $this->CoursInput = '';
            $this->TestInput = 'required';
        }else{
            $this->Coursarea = 'none';
            $this->Testarea = 'none';
            $this->CoursInput = '';
            $this->TestInput = '';
        }
    }

    public function calcul()
    {
        if ($this->produit_options === 'Cours' && $this->selectedCourse != ''){
            $selectedCourse = Course::find($this->selectedCourse);
            $this->selectedProduct = $selectedCourse['level'];
            $this->totalPay = $selectedCourse['price'];

        }elseif ($this->selectedTest != ''){
            $selectedTest = Test::find($this->selectedTest);
            $this->selectedProduct = $selectedTest['level'];
            $this->totalPay = $selectedTest['price'];
        }else{
            $this->selectedProduct = 0;
            $this->totalPay = 0;
        }
    }

    public function mount()
    {
        $this->courses = Course::all();
        $this->tests = Test::all();
        $this->etudiants = Etudiant::all();
    }

    public function selectProduct($num)
    {

        $this->idProduct = $num;

//        return dd($this->selectedProduct);

    }

    public function firstrender()
    {
        $this->size = 'C';
        if ($this->loading === 'none'){
            $this->loading = 'block';
        }else{
            $this->loading = 'none';
        }



    }

    public function render()
    {
        return view('livewire.admin.orders.create');
    }
}
