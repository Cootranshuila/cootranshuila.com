<?php

use App\Http\Controllers\IndexController;
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
Route::get('/historia',function(){
    return view('layouts.historia');
});

Route::get('/inicio', function(){
    return view('welcome');
});

Route::get('/informacion-dian',function(){
    return view('layouts.documentos');
});

Route::get('/nuestra_empresa',function(){
    return view('layouts.mv');
});

Route::get('/', function () {
    return view('welcome');
});

Route::post('/GetHabilitadas', [App\Http\Controllers\IndexController::class, 'GetHabilitadasOrigen']);
Route::post('/GetHabilitadasDestino', [App\Http\Controllers\IndexController::class, 'GetHabilitadasDestino']);
Route::post('/GetDisponiblesIda', [App\Http\Controllers\IndexController::class, 'GetDisponiblesIda']);
Route::post('/GetMapaButacas', [IndexController::class, 'GetMapaButacas']);
/* 
|----------------------------
| buscar buses disponibles
|----------------------------
*/
Route::get('/buscar-bus', [IndexController::class, 'SelectViaje']);

