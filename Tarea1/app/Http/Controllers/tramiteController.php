<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Models\UserAuthenticated;

class tramiteController extends Controller
{
    public function pagTramites(){
        
        $respuesta = Http::withHeaders([
            'Content-Type' => 'application/json; charset=UTF-8',
            'Authorization' => "bearer ".session()->get('token')
        ])->get('http://localhost:8989/tramites_registrados/');
        
        if($respuesta->status() == 200){
            $tramites = json_decode($respuesta->getBody()->getContents());
            return view('tramite',compact('tramites'));
        }else{
            return ($respuesta->status());
        }
    }
}
