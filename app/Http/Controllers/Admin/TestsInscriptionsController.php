<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestsInscriptionsController extends Controller
{
    
    public function index()
    {
        return view('admin.inscriptions.tests-inscriptions.index');
    }
}
