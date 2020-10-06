<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class infoTramiteController extends Controller
{
    public function pagInfoTramite($id){
        
        $ID = strval($id);
        $respuesta = Http::withToken(session()->get('token'))->get('http://localhost:8989/tramites_registrados/'.$ID);
        $tramite = json_decode($respuesta);

        $respuesta2 = Http::withToken(session()->get('token'))->get('http://localhost:8989/tramites_estados/');
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
