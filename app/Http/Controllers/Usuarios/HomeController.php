<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('usuarios.index');
    }

    public function familiar(){
        return view('usuarios.acompañante');
    }

    public function opciones(Request $request){
        return view('usuarios.opciones');
    }

    /*
    |----------------------------------
    |  metodos para actualizar usuario
    |-----------------------------------
    */

    // cambiar foto perfil
    public function change_photo(Request $request){
        // buscar el usuario
        $user = User::find(auth()->user()->id);

        // validar si es una imagen y tiene el tamaño adecuado 2mb
        $request->validate([
            'file' => 'image|max:2048'
        ]);

        //eliminar imagen antigua
        $delete_url = str_replace('storage', 'public', auth()->user()->avatar);
        Storage::delete($delete_url);

        // actualizar y subir imagen nueva
        $imagen =  $request->file('avatar')->store('public/perfil');
        $url = Storage::url($imagen);
        $user->update(['avatar' => $url]);
        
        return redirect()->back();
    }

    // actualizar datos
    public function update(Request $request){
        $user = User::find(auth()->user()->id);

        $user->update([
            'identificacion' => $request['identificacion'],
            'tipo_documento' => $request['tipo'],
            'name' => $request['nombre'],
            'apellido' => $request['apellido'],
            'email' => $request['correo'],
            'telefono' => $request['telefono'],
            'fecha_nacimiento' => $request['fecha_nacimiento'],
            'direccion' => $request['direccion']

        ]);
        
        if($user->save()){
            return redirect()->back();
        }else{
            return dd($user);
        }
    }

    // cambiar contraseña
    public function change_password(Request $request){

        $user_pass = User::find(auth()->user()->id);

        $pass_check = $request['pass_actual'];
        $pass_actual = auth()->user()->password;
        
        if(Hash::check($pass_check, $pass_actual)){
            $user_pass->update([
                'password' => Hash::make($request['pass_new'])
            ]);
            if($user_pass->save()){
                return redirect()->back();
            }
        }else{
            return dd($request['pass_actual']);
        }
    }
}
