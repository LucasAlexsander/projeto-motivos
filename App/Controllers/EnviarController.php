<?php

namespace App\Controllers;

//Recursos do miniframework (MF)
use MF\Controller\Action;
use MF\Model\Container;
//Os models

use App\Models\Cessacao;
use App\Models\Reativacao;
use App\Models\Suspensao;


class IndexController extends Action {    

    public function index() { //Devemos sempre pegar com base a pasta public/ index, já que lá esta tendo um autoload
        //$this->view->dados = array ('Sofá', 'Cadeira', 'Cama'); //Manda a variável para a página atribuida no render.

        //$cessacao = Container::getModel("Cessacao"); //Busca o Model desejado
        

        //$cessacao = Container::getModel("Cessacao");

        //$this->view->dados = 'Olá';
        
                

      //$this->render('page', 'layout');  Estrutura Padrão
        $this->render('index', 'layoutPadrao'); //Recebe como parametro a página que vc quer ir e o seu layout (opcional), respectivamente;
    }
    
    public function admin() {     
        
        //Chamanda os registros de Cessação
        $cessacao = Container::getModel("Cessacao");
        $this->view->cessacao = $cessacao->findAll('cessacao');

        //Chamando os registros de Reativação
        $reativacao = Container::getModel("Reativacao");
        $this->view->reativacao = $reativacao->findAll('reativacao');

        //Chamando os registros de Suspensão
        $suspensao = Container::getModel("Suspensao");
        $this->view->suspensao = $suspensao->findAll('suspensao');




        $this->render('admin', 'layoutPadrao'); 
    }

    public function editar() {

        $id = filter_input(INPUT_GET, 'id');

        //Chamanda os registros de Cessação
        $cessacao = Container::getModel("Cessacao");
        $this->view->cessacao = $cessacao->findById('cessacao', $id);

        //Chamando os registros de Reativação
        $reativacao = Container::getModel("Reativacao");
        $this->view->reativacao = $reativacao->findById('reativacao', $id);

        //Chamando os registros de Suspensão
        $suspensao = Container::getModel("Suspensao");
        $this->view->suspensao = $suspensao->findById('suspensao', $id);


        $this->render('editar', 'layoutPadrao');
    }

    public function envio () {

        
        $this->render('procEnvio', 'layoutPadrao');
    }
}


?>