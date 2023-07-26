<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursInscriptionsController extends Controller
{

    public function index()
    {
        return view('admin.Inscriptions.CoursInscriptions.index');
    }
}
