<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function inicio(){
        return view('login');
    }

    public function logIn(){
        return view('login');
    }
}
