<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class infoTramiteController extends Controller
{
    public function pagInfoTramite($id){
        
        $ID = strval($id);
        $respuesta = Http::withHeaders([
            'Content-Type' => 'application/json; charset=UTF-8',
            'Authorization' => "bearer ".session()->get('token')
        ])->get('http://localhost:8989/tramites_registrados/'.$ID);
        $tramite = json_decode($respuesta);
        session()->put('tramite', $tramite);

        $respuesta2 = Http::withHeaders([
            'Content-Type' => 'application/json; charset=UTF-8',
            'Authorization' => "bearer ".session()->get('token')
        ])->get('http://localhost:8989/tramites_estados/');
        $estados = json_decode($respuesta2);
        
        $respuesta3 = Http::withHeaders([
            'Content-Type' => 'application/json; charset=UTF-8',
            'Authorization' => "bearer ".session()->get('token')
        ])->get('http://localhost:8989/tramites_cambio_estado/cambioEstado/'.$ID);
        $estadosTramite = json_decode($respuesta3);
        $estadoActual = $estadosTramite[0];

        return view('infoTramite')->with('tramite',$tramite)->with('estados',$estados)->
                                    with('estadoActual',$estadoActual);
    }



}
