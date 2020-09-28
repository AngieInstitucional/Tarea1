<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\UserAuthenticated;
use Illuminate\Support\MessageBag;

class LogInController extends Controller
{
    public function LogIn(Request $req){
        $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $resp = Http::post('http://localhost:8989/authentication/login', [
            'cedula' => $req->username,
            'password' => $req->password
        ]);
        if($resp->status() == 200){
            $arreglo = json_decode($resp->body(), true);
            UserAuthenticated::getInstance()->setData($arreglo);
        }else{
            $validator = new MessageBag(['LogIn' => ['Las Credenciales no son correctas']]);
            return redirect('login')->withErrors($validator, 'login');
        }
        
    }
}
