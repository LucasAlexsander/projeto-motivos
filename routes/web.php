<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/motivos');

Route::prefix('/motivos')->group(function() {

    Route::get('/teste', [HomeController::class, 'teste']);

    /* HOMECONTROLLER */
    /* Rota do home */
    Route::get('/', [HomeController::class, 'home'])->name('motivos');

    Route::get('/login', [LoginController::class, 'index'])->name('motivos.admin.login');

    /* Caso o usuário não tenha logado não entrará */
    Route::middleware('validateuser')->group(function () {    
            
        /* USERCONTROLLER */
            /* Fazendo o logout */
        Route::get('logout', [UserController::class, 'userLogout']);

        /* HOMECONTROLLER */
            /* Rota do home */
        Route::get('home', [HomeController::class, 'home'])->name('motivos.home');

        /* Validando para somente admin ter acesso */
        Route::middleware('validateadmin')->group(function() {
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
        
        Route::fallback(function() {
            return view('404');
        });
    });    
});
