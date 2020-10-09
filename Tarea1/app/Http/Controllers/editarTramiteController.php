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
         
        $respuesta = Http::withHeaders([
            'Content-Type' => 'application/json; charset=UTF-8',
            'Authorization' => "bearer ".session()->get('token')
        ])->get('http://localhost:8989/tramites_estados/'.$request->tramEstados);
        $estado = json_decode($respuesta);

        $usuario = session()->get('usuario');

        $respuesta2 = Http::withHeaders([
            'Content-Type' => 'application/json; charset=UTF-8',
            'Authorization' => "bearer ".session()->get('token')
        ])->
        post('http://localhost:8989/tramites_cambio_estado/save/', 
        [
            'tramitesEstadoId' => $estado,
            'usuarioId' => $usuario,
            'tramitesRegistradosId' => session()->get('tramite'),
        ]);
        
        if($respuesta2->status() == 201){
            $cambio = json_decode($respuesta2);
            $tramite = session()->get('tramite');
            return view('confirmacion',compact('cambio'), compact('tramite'));
        }else{
            return $respuesta2->status();
        }
        
    }


}