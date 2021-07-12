<?php

namespace App\Http\Controllers;

use App\Mail\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    //
    public function contacto(){
        return view('contacto.contacto');
    }

    public function mail(Request $request){
        // return dd($request);
        $correo = new Contacto($request->all());
        // return dd($correo);
        // Mail::to('oscarruiz2614@gmail.com')->send($correo);
        Mail::to('clientes@cootranshuila.com')->send($correo);
        return redirect()->back();
        // return view('mails.contacto');
    }
}
