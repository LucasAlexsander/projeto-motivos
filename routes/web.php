<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/* LoginController */
Route::redirect('/', '/motivos/');
Route::get('/motivos/', [LoginController::class, 'login']);

/* Login se tiver erro */
Route::get('/motivos/erro/userInvalido', function() {
    return redirect()->action([LoginController::class, 'login'], ['erro' => 'userInvalido']);});


/* Home Controller */
/* Rota do home */
Route::get('/motivos/home', [HomeController::class, 'home']);


/* Página de ADMIN */
Route::get('/motivos/admin', [HomeController::class, 'adminPage']);



/* UserController */
/* Validando o usuário */
Route::post('motivos/loginConfirm', [UserController::class, 'userValidation']);

/* Fazendo o logout */
Route::get('/motivos/logout', [UserController::class, 'userLogout']);


















/* Página home */
// Route::get('/motivos/home', HomeController::class, 'home');

/* 
protected function initRoutes() {
        $routes['login'] = array ( //Nome do Array
            'route' => '/', //Rota
            'controller' => 'indexController', //Controller usado para a rota
            'action' => 'login' //Ação
        );
                
        $routes['home'] = array ( //Nome do Array
            'route' => '/home', //Rota
            'controller' => 'indexController', //Controller usado para a rota
            'action' => 'home' //Ação
        );
        
        $routes['logout'] = array ( //Nome do Array
            'route' => '/logout', //Rota
            'controller' => 'indexController', //Controller usado para a rota
            'action' => 'logout' //Ação
        );
        
        $routes['addReg'] = array (
            'route' => '/addReg',
            'controller' => 'IndexController',
            'action' => 'addReg'
        );

        //CRUD CONTROLLER

        $routes['admin'] = array (
            'route' => '/admin', 
            'controller' => 'IndexController',
            'action' => 'admin'
        );


        $routes['editar'] = array (
            'route' => '/editar',
            'controller' => 'IndexController',
            'action' => 'editar'
        );

        $routes['envioUpdate'] = array (
            'route' => '/procEnvio',
            'controller' => 'IndexController',
            'action' => 'update'
        );

        $routes['delete'] = array (
            'route' => '/excluir',
            'controller' => 'IndexController',
            'action' => 'delete'
        );


        $routes['registrar'] = array (
            'route' => '/registrar',
            'controller' => 'IndexController',
            'action' => 'registrar'
        );
        
        //USER CONTROLLER
        
        $routes['loginConfirm'] = array (
            'route' => '/loginConfirm',
            'controller' => 'UserController',
            'action' => 'loginConfirm'
        );
        
*/