<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/crear-persona', function () {
    return view('create_user');
});
Route::post('/subir-persona', [PersonaController::class, 'subir_persona']);

Route::get('/lista-personas', [PersonaController::class, 'listar_personas']);

Route::get('/actualizar-persona', function () {
    return view('update_user');
});


Route::get('/eliminar-persona', function () {
    return view('delete_user');
});
