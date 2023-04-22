<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\U3_LibroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibreriaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/libros', [LibroController::class, 'index'])
->name('libros');

Route::get('/editoriales', [EditorialController::class, 'index'])
->name('editoriales');

Route::get('/autores', [AutorController::class, 'index'])
    ->name('autores');

Route::get('/u3/libros', [U3_LibroController::class, 'u3_libros'])
    ->name('libros');

Route::get('/u3/indice', [U3_LibroController::class, 'u3_indice'])
->name('u3_indice');

Route::get('/u3/contacto', [U3_LibroController::class, 'u3_contacto'])
    ->name('u3_contacto');

Route::get('/u3/acercade', [U3_LibroController::class, 'u3_acercade'])
    ->name('u3_acercade');


Route::get('/u4/inicio', [ObraController::class, 'home'])
->name('inicio');


Route::get('/u4/obras', [ObraController::class, 'obras'])
    ->name('obras');

Route::get('/u4/insertar', [ObraController::class, 'create'])
    ->name('anadir');


Route::post('/u4/insertar', [ObraController::class, 'store'])
    ->name('insertar');

Route::get('/u4/borrar', [ObraController::class, 'destroy'])
    ->name('borrar');


// De esta forma voy a definir en una sola línea todas las rutas del la clase LibreriaController
Route::resource('/u6',LibreriaController::class);
