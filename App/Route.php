<?php 

namespace App;
use MF\Init\Bootstrap;

class Route extends Bootstrap {   

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
        

        
        $this->setRoutes($routes);
    }
  
}
?>