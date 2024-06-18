<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\productoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', inicioController::class);



Route::controller(productoController::class)->group(function () {

    route::get('producto', 'principal')->name('producto.principal');

    route::get('producto/crear', 'crear')->name('producto.crear');

    route::post('producto', 'store')->name('producto.store');

    Route::get('producto/{variable}', 'mostrar')->name('producto.mostrar');
    Route::get('producto/{id}/editar', 'editar')->name('producto.editar');

    //6. RUTA PARA MANDAR EL FORMULARIO MODIFICADO
    Route::put('producto/{producto}', 'update')->name('producto.update');


    //8. RUTA PARA LA ELIMINACION DE REGISTRO
    Route::delete('eliminar/{id}', 'destroy')->name('producto.borrar');
    Route::get('desactivar/{id}', 'desactivar')->name('producto.desactivar');
    Route::get('activar/{id}', 'activar')->name('producto.activar');




});
