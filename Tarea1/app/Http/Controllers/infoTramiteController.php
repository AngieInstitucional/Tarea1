<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class infoTramiteController extends Controller
{
    public function pagInfoTramite($id){
        
        $ID = strval($id);
        $respuesta = Http::get('http://localhost:8989/tramites_registrados/'.$ID);
        $tramite = json_decode($respuesta);

        $respuesta2 = Http::get('http://localhost:8989/tramites_estados/');
        $estados = json_decode($respuesta2);

        return view('infoTramite', compact('estados'),compact('tramite'));
    }


}
