<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class tramiteController extends Controller
{
    public function pagTramites(){

        $cliente = new Client([
            'base_uri' => 'http://localhost:8989/tramites_registrados',
            'timeout' => 0,
        ]);
        
        $respuesta = $cliente->request('GET','');
        
        $tramites = json_decode($respuesta->getBody()->getContents());
        return view('tramite',compact('tramites'));
    }
}
