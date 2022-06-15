<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FirstRegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

Route::redirect('/', '/motivos');

Route::prefix('/motivos')->group(function() {

    /* HOMECONTROLLER */
    /* Rota do Home */
    Route::get('/', [HomeController::class, 'home'])->name('motivos');

    /* Rota para Logar */
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    /* Rota para usuários que esqueceram a senha */
    Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'reset'])->name('password.email');

    /* Rota para e-mail para trocar a senha */
    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'token'])->name('password.reset');
    Route::post('/reset-password', [ForgotPasswordController::class, 'newPassword'])->name('password.update');

    /* Rota para o primeiro usuário */
    Route::get('/register-first', [FirstRegisterController::class, 'first'])->name('novo.usuario');
    Route::post('/register-first', [FirstRegisterController::class, 'firstRegister']);

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
        
});
    Route::fallback(function() {
        return view('404');
    });