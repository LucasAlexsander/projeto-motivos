<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/motivos');

Route::prefix('/motivos')->group(function() {
    /* LOGINCONTROLLER */
    Route::get('/', [LoginController::class, 'login'])->name('motivos.login');

    /* -------------------------------------------------------------------------- */

    /* USERCONTROLLER */
        /* Validando o usuário */
        Route::post('loginConfirm', [UserController::class, 'userValidation']);

        /* Fazendo o logout */
    Route::get('logout', [UserController::class, 'userLogout']);

    /* -------------------------------------------------------------------------- */

    /* HOMECONTROLLER */
        /* Rota do home */
    Route::get('home', [HomeController::class, 'home'])->name('motivos.home');

    /* -------------------------------------------------------------------------- */

    /* ADMINCONTROLLER */
        /* Grupo de páginas do admin */
    Route::prefix('admin')->group(function(){

        Route::get('/', [AdminController::class, 'index'])->name('motivos.admin');

        /* Adicionar registros */
        Route::get('/add/{tb}', [AdminController::class, 'add']);
        Route::post('/add/{tb}', [AdminController::class, 'addAction']);

        /* Editar registros */
        Route::get('/edit/{id}/{tb}', [AdminController::class, 'edit']);
        Route::post('/edit/{id}/{tb}', [AdminController::class, 'editAction']);

        /* Deletar registros */
        Route::get('/delete/{id}/{tb}', [AdminController::class, 'del']);
    });
});
