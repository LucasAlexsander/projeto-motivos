<?php

namespace App\Controllers;

//Recursos do miniframework (MF)

use MF\Controller\Action;
use MF\Model\Container;
//Os models



class IndexController extends Action {   
    
    public function login () {

        $this->render('index', 'loginLayout');
    }

    public function home() { //Devemos sempre pegar com base a pasta public/ index, já que lá esta tendo um autoload
        //$this->view->dados = array ('Sofá', 'Cadeira', 'Cama'); //Manda a variável para a página atribuida no render.

        //$cessacao = Container::getModel("Cessacao"); //Busca o Model desejado
        

        //$cessacao = Container::getModel("Cessacao");

        //$this->view->dados = 'Olá';
        
                

      //$this->render('page', 'layout');  Estrutura Padrão
        $this->render('home', 'layoutPadrao'); //Recebe como parametro a página que vc quer ir e o seu layout (opcional), respectivamente;
    }

    public function logout() {

        session_start();
        session_destroy();
        header('location: /');
    }
    
    public function addReg() {

        $this->render('addReg', 'layoutPadrao');
    }


    /* CRUD */

    public function admin() {   

        $findAll = Container::getModel('CrudDbFindAll');

        $cessacao = $findAll->findAll('cessacao');
        $this->view->cessacao = $cessacao;

        $reativacao = $findAll->findAll('reativacao');
        $this->view->reativacao = $reativacao;
    
        $suspensao = $findAll->findAll('suspensao');
        $this->view->suspensao = $suspensao;

        $this->render('admin', 'layoutPadrao'); 
    }

    public function editar() {

        $id = filter_input(INPUT_GET, 'id');
        $tableName = filter_input(INPUT_GET, 'nome');

        $findId = Container::getModel('CrudDbFindId');
        $this->view->dados = $findId->findById($tableName, $id);

        $this->render('editar', 'layoutPadrao');
    }

    public function update () {
        
        $id = filter_input(INPUT_POST, 'id');
        $tableName = filter_input(INPUT_POST, 'tableName');        
        
        $procEnvio = Container::getModel('CrudDbUpdate');

        $status = $procEnvio->update($tableName, $id); 
        
        if ($status) {

            header('Location: /editar?id='.$id.'&nome='.$tableName.'&status=alterado');

        } else {
            
            header('Location: /editar?id='.$id.'&nome='.$tableName.'&status=nao_alterado');
        
        }
    }

    public function delete () {

        $tableName = filter_input(INPUT_GET, 'nome');
        $tableId = filter_input(INPUT_GET, 'id');

        $delete = Container::getModel('CrudDbDelete');

        $delete->delete($tableName, $tableId);

    }

    public function registrar() {
        
        $tableName = filter_input(INPUT_POST, 'tableName');
        
        $add = Container::getModel('CrudDbCriarReg');
        
        $resultado = $add->addRegDb($tableName);  
        if ($resultado) { 
            header('location: /admin?status=adicionado&tb='.$tableName);
        } else {
            header('location: /addReg?Erro_Envio');
        }
    }


}
?>