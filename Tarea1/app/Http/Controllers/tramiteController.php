<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tramiteController extends Controller
{
    public function pagTramites(){
        return view('tramite');
    }
}
