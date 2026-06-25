<?php

use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('Presentacion.index');
});

Route::get('/Presentacion/index', function () {
    return view('Presentacion.index');
});

Route::get('/usuarios/nuevo', function () {
    return view('usuarios.create');
});

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'update']);
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy']);