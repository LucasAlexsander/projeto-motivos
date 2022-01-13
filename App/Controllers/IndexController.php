<?php

namespace App\Controllers;

//Recursos do miniframework (MF)
use MF\Controller\Action;
use MF\Model\Container;
//Os models


class IndexController extends Action {    

    public function index() { //Devemos sempre pegar com base a pasta public/ index, já que lá esta tendo um autoload
        //$this->view->dados = array ('Sofá', 'Cadeira', 'Cama'); //Manda a variável para a página atribuida no render.

        #$produto = Container::getModel(); //Busca o Model desejado

        #$produtos = $produto->getProdutos();

        #$this->view->dados = $produtos;

      //$this->render('page', 'layout');  Estrutura Padrão
        $this->render('index', 'layoutPadrao'); //Recebe como parametro a página que vc quer ir e o seu layout (opcional), respectivamente;
    }
    
    public function sobreNos() {     
        
        #$info = Container::getModel();

        #$this->view->dados = $info->getInfo();


        $this->render('sobreNos', 'layout2'); 
    }

    public function excluir() {
        $this->render('excluir');
    }

    public function css() {
        $this->render('../Assets/css/main.css');
    }
}


?>