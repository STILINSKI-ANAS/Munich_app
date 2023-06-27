<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\EtudiantCourse;
use App\Models\EtudiantTest;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Index extends Component
{
    public $name;
    public $showSubmitButton = 'hidden';
    public $orders = [];

    public $EtudiantCourses = [];
    public $EtudiantTests = [];

    public $idOrder;

    public function mount()
    {
        $this->EtudiantCourses = EtudiantCourse::with('etudiant', 'course')->get();
        $this->EtudiantCourses->each(function ($item) {
            $item->type = 'Course';
        });
//        dd($this->EtudiantCourses->toArray());

        $this->EtudiantTests = EtudiantTest::with('etudiant', 'test')->get();
        $this->EtudiantTests->each(function ($item) {
            $item->type = 'Test';
        });
//        dd($this->EtudiantTests->toArray());
//        $this->orders = $this->EtudiantCourses->merge($this->EtudiantTests);
//        $this->orders = $this->EtudiantCourses->concat($this->EtudiantTests);

        $this->orders = array_merge($this->EtudiantCourses->toArray(), $this->EtudiantTests->toArray());
//        $this->orders = $this->EtudiantCourses;
//        dd($this->orders);

    }
    public function createButton($idOrder){
        $this->idOrder = $idOrder;
        $this->showSubmitButton = '';
    }

    public function hide_validation()
    {
        $this->idOrder = 0;
        $this->showSubmitButton = 'hidden';
    }

    public function destroyOrder()
    {
        $order = EtudiantCourse::find($this->idOrder);
        $order = EtudiantTest::find($this->idOrder);
//        dd($order);
        if ($order->Image){
        $path = 'uploads/order/'. $order->Image;
            File::delete($path);
        }
        $order->delete();
        $this->showSubmitButton = 'hidden';
        $this->mount();
    }
    public function render()
    {
        return view('livewire.admin.orders.index');
    }
}
