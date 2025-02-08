<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasControlador;


Route::get('/', [PaginasControlador::class, 'inicio']);
Route::get('/acerca', [PaginasControlador::class, 'acerca']);
Route::get('/portafolio', [PaginasControlador::class, 'portafolio']);
Route::get('/contacto', [PaginasControlador::class, 'contacto']);
//Route::post('/contacto', [PaginasControlador::class, 'guardarMensaje']);
//Route::get('/mensajes', [PaginasControlador::class, 'verMensajes']);


