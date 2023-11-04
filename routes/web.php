<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\directorioController;

use App\Http\Controllers\contactosController;

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

Route::get('/directorio',[directorioController::class,'homeDirectorios'])->name('home');

Route::get('/directorio/creae',[directorioController::class,'crearEntrada'])->name('directorios.entrada');

Route::get('/directorio/buscar',[directorioController::class,'buscarEntrada'])->name('directorios.buscar');

Route::get('/directorio/contactos/{codigoEntrada}', [contactosController::class, 'verContactosPorId']
)->name('contactos.por.id');

Route::get('/contactos/eliminar/{id}', [contactosController::class, 'eliminarContacto']
)->name('eliminar.por.id');

Route::post('/crear/entrada/nueva', [directorioController::class, 'crearDirectorio']
)->name('crear.directorio');

Route::post('/buscar/correo', [directorioController::class, 'BuscarDirectorio']
)->name('buscar.correo');


// Route::post('/calcular-precio-apartamento', [apartamentoController::class, 'calcularPrecio'])
//     ->name('calcular.precio.apartamento');
