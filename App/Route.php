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
            'controller' => 'indexController',
            'action' => 'admin'
        );


        $routes['editar'] = array (
            'route' => '/editar',
            'controller' => 'IndexController',
            'action' => 'editar'
        );

        $routes['criarMot'] = array (
            'route' => '/criarMot',
            'controller' => 'IndexController',
            'action' => 'criarMot'
        );

        $routes['envioUpdate'] = array (
            'route' => '/procEnvio',
            'controller' => 'IndexController',
            'action' => 'procEnvio'
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
        
        
        $this->setRoutes($routes);
    }
  
}
?>