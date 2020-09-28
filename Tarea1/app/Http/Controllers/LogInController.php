<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LogInController extends Controller
{
    public function LogIn(Request $req){
        $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $resp = Http::post('http://localhost:8989/authentication/login', [
            'cedula' => 'admin',
            'password' => 'Una2020'
        ]);
        echo $resp->body();
    }
}
