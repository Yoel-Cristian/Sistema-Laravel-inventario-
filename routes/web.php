<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicioController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;

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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
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
});



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::controller(categoriaController::class)->group(function () {
        Route::get('categoria', 'principal')->name('categoria.principal');
        Route::get('categoria/crear',  'crear')->name('categoria.crear');
        Route::post('categoria',  'store')->name('categoria.store');
        Route::get('categoria/{variable}',  'mostrar')->name('categoria.mostrar');
        Route::get('categoria/{categoria}/edit',  'editar')->name('categoria.editar');
        Route::put('categoria/{categoria}', 'update')->name('categoria.update');
        Route::delete('categoria/{id}', 'borrar')->name('categoria.borrar');
        Route::get('desactiva-categoria/{id}', 'desactivacategoria')->name('desactivacat');
        Route::get('activa-categoria/{id}', 'activacategoria')->name('activacat');
    });
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::controller(RoleController::class)->group(function () {
        Route::get('role', 'principal')->name('role.principal');
        Route::get('role/crear', 'crear')->name('role.crear');
        Route::post('role', 'store')->name('role.store');
        Route::get('role/{variable}', 'mostrar')->name('role.mostrar');
        Route::get('role/{role}/edit', 'editar')->name('role.editar');
        Route::put('role/{role}', 'update')->name('role.update');
        Route::delete('role/{id}', 'borrar')->name('role.borrar');
        Route::get('desactiva-role/{id}', 'desactivarole')->name('desactivarole');
        Route::get('activa-role/{id}', 'activarole')->name('activarole');
    });
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('profile', 'principal')->name('profile.principal');
        Route::get('profile/crear', 'crear')->name('profile.crear');
        Route::post('profile', 'store')->name('profile.store');
        Route::get('profile/{variable}', 'mostrar')->name('profile.mostrar');
        Route::get('profile/{profile}/edit', 'editar')->name('profile.editar');
        Route::put('profile/{profile}', 'update')->name('profile.update');
        Route::delete('profile/{id}', 'destroy')->name('profile.borrar');
        Route::get('desactiva-profile/{id}', 'desactivar')->name('desactivarprofile');
        Route::get('activa-profile/{id}', 'activar')->name('activarprofile');
    });
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::controller(EstudianteController::class)->group(function () {
        Route::get('estudiantes', 'principal')->name('estudiantes.principal');
        Route::get('estudiantes/crear', 'crear')->name('estudiantes.crear');
        Route::post('estudiantes', 'store')->name('estudiantes.store');
        Route::get('estudiantes/{id}', 'mostrar')->name('estudiantes.mostrar');
        Route::get('estudiantes/{estudiante}/edit', 'editar')->name('estudiantes.editar');
        Route::put('estudiantes/{estudiante}', 'update')->name('estudiantes.update');
        Route::delete('estudiantes/{id}', 'borrar')->name('estudiantes.borrar');
        Route::get('desactiva-estudiante/{id}', 'desactivarEstudiante')->name('desactivar.estudiante');
        Route::get('activa-estudiante/{id}', 'activarEstudiante')->name('activar.estudiante');
    });
});
