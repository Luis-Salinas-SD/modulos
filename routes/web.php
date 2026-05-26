<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\AsignOfficeController;
use App\Http\Controllers\ProfileController;


Route::controller(LoginController::class)->group(
    function () {
        Route::GET('/', 'index')->name('login.form');
        Route::POST('/login', 'login')->name('loginAuth');
        Route::post('/logout', 'logout')->name('logout');
    }
);

//% Ruta para mostrar el perfil - profile
Route::controller(ProfileController::class)->group(
    function () {
        Route::get('/profilead', 'indexAdmin')->name('profileAdmin');
        Route::get('/profileus', 'indexUser')->name('profileUser');
    }
);

Route::controller(UsuarioController::class)->group(function () {
    Route::GET('/usuarios', 'index')->name('usuarios');
    Route::POST('/usuarios/create', 'create')->name('crearUsuario');
    /* Route::post('/usuarios', 'store')->name('usuarios.store');
    Route::get('/usuarios/{id}', 'show')->name('usuarios.show');
    Route::get('/usuarios/{id}/edit', 'edit')->name('usuarios.edit');
    Route::put('/usuarios/{id}', 'update')->name('usuarios.update');
    Route::delete('/usuarios/{id}', 'destroy')->name('usuarios.destroy'); */
});

Route::controller(ModuloController::class)->group(function () {
    Route::GET('/modulos', 'index')->name('modulos');
    Route::POST('/modulos/create', 'create')->name('crearModulo');
});

Route::controller(OfficeController::class)->group(function () {
    Route::GET('/oficinas', 'index')->name('oficinas');
    Route::POST('/oficinas/create', 'create')->name('crearOficina');
});

Route::controller(AsignOfficeController::class)->group(function () {
    Route::GET('/asignacion', 'index')->name('asignarOficina');
    Route::POST('/asigOficina/create', 'create')->name('asignarOficinaCreate');
});
