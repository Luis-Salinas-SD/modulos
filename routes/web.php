<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;

Route::controller(LoginController::class)->group(
    function () {
        Route::GET('/', 'index')->name('login.form');
        Route::POST('/login', 'login')->name('loginAuth');
        Route::post('/logout', 'logout')->name('logout');
    }
);

Route::controller(UsuarioController::class)->group(function () {
    Route::get('/usuarios', 'index')->name('usuarios.index');
    Route::get('/usuarios/create', 'create')->name('usuarios.create');
    Route::post('/usuarios', 'store')->name('usuarios.store');
    Route::get('/usuarios/{id}', 'show')->name('usuarios.show');
    Route::get('/usuarios/{id}/edit', 'edit')->name('usuarios.edit');
    Route::put('/usuarios/{id}', 'update')->name('usuarios.update');
    Route::delete('/usuarios/{id}', 'destroy')->name('usuarios.destroy');
});
