<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Models\UserAuthenticated;

class tramiteController extends Controller
{
    public function pagTramites(){
        $tramites = [];
        return view('tramite', compact('tramites'));
        /*
        $respuesta = Http::withHeaders([
            'Content-Type' => 'application/json; charset=UTF-8',
            'Authorization' => "bearer ".session()->get('token')
        ])->get('http://localhost:8989/tramites_registrados/');
        
        if($respuesta->status() == 200){
            $tramites = json_decode($respuesta->getBody()->getContents());
            return view('tramite',compact('tramites'));
        }else{
            return ($respuesta->status());
        }*/
    }

    public function buscarTramitesComboBox(Request $req){
        $req->validate([
            'txtBuscar' => 'required'
        ]);
        $buscar = $req->txtBuscar;
        if($req->filter == 'Id del tramite'){
            if(is_numeric($buscar)){
                $respuesta = Http::withHeaders([
                    'Content-Type' => 'application/json; charset=UTF-8',
                    'Authorization' => "bearer ".session()->get('token')
                ])->get('http://localhost:8989/tramites_registrados/'.$buscar);
                if($respuesta->status() == 200){
                    $tramites = json_decode($respuesta->getBody()->getContents());
                    if(!is_null($tramites))
                        return view('tramite',compact('tramites'));
                    else
                        return redirect('tramites');
                }
            }else{
                return redirect('tramites');
            }
        }else if($req->filter == 'Estado del tramite'){
            $respuesta = Http::withHeaders([
                'Content-Type' => 'application/json; charset=UTF-8',
                'Authorization' => "bearer ".session()->get('token')
            ])->get('http://localhost:8989/tramites_registrados/findByEstado/'.$buscar);
            if($respuesta->status() == 200){
                $tramites = json_decode($respuesta->getBody()->getContents());
                if(!is_null($tramites))
                    return view('tramite',compact('tramites'));
                else
                    return redirect('tramites');
            }
        }else{
            $respuesta = Http::withHeaders([
                'Content-Type' => 'application/json; charset=UTF-8',
                'Authorization' => "bearer ".session()->get('token')
            ])->get('http://localhost:8989/tramites_registrados/findByCedulaCliente/'.$buscar);
            if($respuesta->status() == 200){
                $tramites = json_decode($respuesta->getBody()->getContents());
                if(!is_null($tramites))
                    return view('tramite',compact('tramites'));
                else
                    return redirect('tramites');
            }
        }
    }

    public function buscarTramitesFechas(Request $req){
        $req->validate([
            'yfi' => 'required',
            'mfi' => 'required',
            'dfi' => 'required',
            'yff' => 'required',
            'mff' => 'required',
            'dff' => 'required'
        ]);
        $yfi = $req->yfi;
        $mfi = $req->mfi;
        $dfi = $req->dfi;
        $yff = $req->yff;
        $mff = $req->mff;
        $dff = $req->dff;
        $respuesta = Http::withHeaders([
            'Content-Type' => 'application/json; charset=UTF-8',
            'Authorization' => "bearer ".session()->get('token')
        ])->get('http://localhost:8989/tramites_registrados/findByFechas/'.$yfi.'/'.$mfi.'/'.$dfi.'/'.$yff.'/'.$mff.'/'.$dff);
        if($respuesta->status() == 200){
            $tramites = json_decode($respuesta->getBody()->getContents());
            if(!is_null($tramites))
                return view('tramite',compact('tramites'));
            else
                return redirect('tramites');
        }else{
            return redirect('tramites');
        }
    }
}
