<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class editarTramiteController extends Controller
{
    public function editarEstado(Request $request){
        $request->validate([
            'tramite' => 'required',
            'tramEstados' => 'required'
        ]);
        
        $respuesta = Http::withToken(session()->get('token'))->get('http://localhost:8989/tramites_estados/'.$request->tramEstados);
        $estado = json_decode($respuesta);

        $usuario = session()->get('usuario');
        
        $respuesta2 = Http::withToken(session()->get('token'))->
        post('http://localhost:8989/tramites_cambio_estado/save/', 
        [
            'tramitesEstadoId' => $estado,
            'usuarioId' => $usuario,
        ]);
        
        if($respuesta2->status() >= 200 && $respuesta2->status() < 300){
            $cambio = json_decode($respuesta2);
            return $cambio;
        }else{
            return $respuesta2->status();
        }
        
    }


}