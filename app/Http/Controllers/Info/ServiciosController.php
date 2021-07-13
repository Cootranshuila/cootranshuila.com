<?php

namespace App\Http\Controllers\Info;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    protected $buses;

    public function __construct()
    {
        $this->buses = collect([
            [
                'imagen' => [
                    '/assets/images/flota/doble_yo/01.png',
                    '/assets/images/flota/doble_yo/02.png',
                    '/assets/images/flota/doble_yo/03.png',
                    '/assets/images/flota/doble_yo/04.png'
                ]
            ]
        ]);
    }

    public function flota(){
        $buses = $this->buses;
        // $buses = $buses[0]['imagen'];
        // return dd($buses);
        return view('info.flota', compact('buses'));
    }

    public function encomiendas(){
        return view('info.encomiendas');
    }

    public function especial(){
        return view('info.servicio_especial');
    }

    public function turismo(){
        return view('info.agencia');
    }

    public function estacion(){
        return view('info.estacion');
    }

    public function politica(){
        return view('info.politica');
    }
}
