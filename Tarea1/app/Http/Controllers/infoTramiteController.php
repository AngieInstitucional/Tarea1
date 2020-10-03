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
        return view('infoTramite', compact('tramite'));
    }
}
