<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
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
