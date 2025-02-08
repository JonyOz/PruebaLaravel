<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasControlador;


Route::get('/', [PaginasControlador::class, 'inicio']);
Route::get('/acerca', [PaginasControlador::class, 'acerca']);
Route::get('/portafolio', [PaginasControlador::class, 'portafolio']);
//Route::get('/contacto', [PaginasControlador::class, 'contacto']);
//Route::post('/contacto', [PaginasControlador::class, 'guardarMensaje']);
//Route::get('/mensajes', [PaginasControlador::class, 'verMensajes']);


use App\Http\Controllers\FormularioController;

Route::get('/formulario', [FormularioController::class, 'mostrarFormulario']); // Mostrar formulario
Route::post('/enviar-formulario', [FormularioController::class, 'enviarFormulario'])->name('formulario.enviar'); // Enviar formulario

Route::get('/formularios', [FormularioController::class, 'index'])->name('formularios.index');

// Ruta para editar un formulario
Route::get('/formularios/{id}/edit', [FormularioController::class, 'edit'])->name('formularios.edit');

// Ruta para actualizar un formulario
Route::put('/formularios/{id}', [FormularioController::class, 'update'])->name('formularios.update');

// Ruta para eliminar un formulario
Route::delete('/formularios/{id}', [FormularioController::class, 'destroy'])->name('formularios.destroy');
