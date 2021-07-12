<?php

namespace App\Http\Controllers\Info;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function flota(){
        return view('info.flota');
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
