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
        
        return view('infoTramite', compact('tramite'), compact('estados'));
    }

    public function editarEstado(Request $request){
        $request->validate([
            'tramite' => 'required',
            'tramEstados' => 'required'
        ]);
        

        return session()->get('usuario');
    }


}
