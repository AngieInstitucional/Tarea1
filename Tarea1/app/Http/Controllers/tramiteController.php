<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class tramiteController extends Controller
{
    public function pagTramites(){

        $cliente = new Client([
            'base_uri' => 'https://jsonplaceholder.typicode.com',
            'timeout' => 2.0,
        ]);
        
        $respuesta = $cliente->request('GET','posts');
        
        return json_decode($respuesta->getBody()->getContents());

        //return view('tramite');
    }
}
