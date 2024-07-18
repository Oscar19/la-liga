<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PartidoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/equipos', [EquipoController::class, 'index']);

Route::get('/equipos/create', [EquipoController::class, 'create']);
Route::post('/equipos', [EquipoController::class, 'store']);
Route::get('/equipos/{equipo}', [EquipoController::class, 'show']);

Route::get('/partidos', [PartidoController::class, 'index']);
/*Route::get('/equipos/create', function(){
    return "crear equipos";
});*/


