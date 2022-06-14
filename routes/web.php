<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/motivos');

Route::prefix('/motivos')->group(function() {

    /* HOMECONTROLLER */
    /* Rota do Home */
    Route::get('/', [HomeController::class, 'home'])->name('motivos');

    /* Rota para Logar */
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    /* Rota para Registrar novo usuário */
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    /* Logout */
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('/admin')->group(function(){

        /* Página de ADMIN */
        Route::get('/', [AdminController::class, 'index'])->name('motivos.admin');

        /* Adicionando Motivos */
        Route::get('/add/{tb}', [AdminController::class, 'add']);
        Route::post('/add/{tb}', [AdminController::class, 'addAction']);

        /* Editando Motivos */
        Route::get('/edit/{id}/{tb}', [AdminController::class, 'edit']);
        Route::post('/edit/{id}/{tb}', [AdminController::class, 'editAction']);

        /* Deletando Motivos */
        Route::get('/delete/{id}/{tb}', [AdminController::class, 'del']);
    });
        
    Route::fallback(function() {
        return view('404');
    });
});