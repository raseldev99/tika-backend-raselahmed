<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deshbordController extends Controller
{
    public function index(){
        return view('dashboard');
    }
}

