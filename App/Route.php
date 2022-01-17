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

        $routes['addReg'] = array (
            'route' => '/addReg',
            'controller' => 'IndexController',
            'action' => 'addReg'
        );

        $routes['addRegDb'] = array (
            'route' => '/addReg/Db',
            'controller' => 'IndexController',
            'action' => 'addRegDb'
        );
        
        $routes['Login'] = array (
            'route' => '/login',
            'controller' => 'IndexController',
            'action' => 'login'
        );
        

        
        $this->setRoutes($routes);
    }
  
}
?>