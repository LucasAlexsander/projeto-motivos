<?php 

namespace App;
use MF\Init\Bootstrap;

class Route extends Bootstrap {   

    protected function initRoutes() {
        $routes['home'] = array ( //Nome do Array
            'route' => '/', //Rota
            'controller' => 'indexController', //Controller usado para a rota
            'action' => 'index' //Ação
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

        $routes['criarMot'] = array (
            'route' => '/criarMot',
            'controller' => 'CrudController',
            'action' => 'criarMot'
        );

        $routes['envioUpdate'] = array (
            'route' => '/procEnvio',
            'controller' => 'CrudController',
            'action' => 'procEnvio'
        );

        $routes['delete'] = array (
            'route' => '/excluir',
            'controller' => 'CrudController',
            'action' => 'delete'
        );

        $routes['addReg'] = array (
            'route' => '/addReg',
            'controller' => 'IndexController',
            'action' => 'addReg'
        );

        $routes['addRegDb'] = array (
            'route' => '/addReg/Db',
            'controller' => 'CrudController',
            'action' => 'addRegDb'
        );
        
        
        $this->setRoutes($routes);
    }
  
}
?>