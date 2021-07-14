<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Info\ServiciosController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\Usuarios\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function(){
    return view('welcome');
});

Route::get('/historia',function(){
    return view('empresa.historia');
});

Route::get('/nuestra-empresa',function(){
    return view('empresa.nosotros');
});

Route::get('/informacion-dian',function(){
    return view('layouts.documentos');
});


Route::get('/contacto', [ContactoController::class, 'contacto'])->name('contacto');
Route::get('/info/flota', [ServiciosController::class, 'flota'])->name('flota');
Route::get('/info/encomiendas', [ServiciosController::class, 'encomiendas'])->name('encomiendas');
Route::get('/info/servicio-especial', [ServiciosController::class, 'especial'])->name('especial');
Route::get('/info/turismo', [ServiciosController::class, 'turismo'])->name('turismo');
Route::get('/info/estacion-de-servicios', [ServiciosController::class, 'estacion'])->name('estacion');
Route::get('/info/politica_datos', [ServiciosController::class, 'politica'])->name('politica');

Route::post('/mail', [ContactoController::class, 'mail'])->name('contacto_mail');


// rutas para buscar viajes
Route::post('/GetHabilitadas', [App\Http\Controllers\IndexController::class, 'GetHabilitadasOrigen']);
Route::post('/GetHabilitadasDestino', [App\Http\Controllers\IndexController::class, 'GetHabilitadasDestino']);
Route::post('/GetDisponiblesIda', [App\Http\Controllers\IndexController::class, 'GetDisponiblesIda']);
Route::post('/GetMapaButacas', [IndexController::class, 'GetMapaButacas']);
Route::post('/validarViaje', [IndexController::class, 'validarViaje']);

Route::get('/checkout', [IndexController::class, 'checkout']);
/*
|----------------------------
| buscar buses disponibles
|----------------------------
*/
Route::get('/GetDisponiblesIda', [IndexController::class, 'SelectViaje']);

// Rutas para login con Google
Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect'])->name('google');
Route::get('/callback/{provider}', [SocialController::class, 'callback']);

Auth::routes();
/*
|---------------------------
| rutas para usuarios
|---------------------------
*/
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard/familiar', [HomeController::class, 'familiar'])->name('familia');
Route::get('/dashboard/opciones', [HomeController::class, 'opciones'])->name('opciones');

// actulizar datos de usuario
Route::post('/dashboard/opciones/cambiar-imagen', [HomeController::class, 'change_photo']);
Route::post('/dashboard/opciones/actualizar', [HomeController::class, 'update']);
Route::post('/dashboard/opciones/update-password', [HomeController::class, 'change_password']);