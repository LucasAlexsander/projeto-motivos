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
            'route' => '/Editar',
            'controller' => 'IndexController',
            'action' => 'editar'
        );

        $routes['envioUpdate'] = array (
            'route' => '/procEnvio',
            'controller' => 'IndexController',
            'action' => 'envio'
        );
        
        
        $this->setRoutes($routes);
    }
  
}
?>