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
            $jwt = $arreglo['jwt'];
            $usuario = $arreglo['usuario'];
            if($arreglo['permisos'] != null){
                foreach($arreglo['permisos'] as $item){
                    if($item['permiso']['codigo'] == 'TRA05' || $item['permiso']['codigo'] == 'TRD01'){
                        $permisos[$item['permiso']['codigo']] = ($item['permiso']['codigo']);
                    }
                }
                if(!is_null($permisos) && $permisos['TRA05'] != null){
                    session()->put('token', $jwt);
                    session()->put('usuario', $usuario);
                    session()->put('permisos', $permisos);
                    return redirect('tramites');
                }else{
                    $validator = new MessageBag(['LogIn' => ['Usted no posee los permisos necesarios']]);
                    return redirect('login')->withErrors($validator, 'login');
                }
            }else{
                $validator = new MessageBag(['LogIn' => ['Usted no posee ningun permiso']]);
                return redirect('login')->withErrors($validator, 'login');
            }
        }else{
            $validator = new MessageBag(['LogIn' => ['Las Credenciales no son correctas']]);
            return redirect('login')->withErrors($validator, 'login');
        }
        
    }
}
