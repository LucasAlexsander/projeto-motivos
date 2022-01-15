<?php

namespace App\Controllers;

//Recursos do miniframework (MF)

use MF\Controller\Action;
use MF\Model\Container;
//Os models



class CrudController extends Action {    
    
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

    public function procEnvio () {

        $procEnvio = Container::getModel('CrudDbProcEnvio');

        $id = filter_input(INPUT_POST, 'id');
        $tableName = filter_input(INPUT_POST, 'tableName');
        
        if ($tableName == 'reativacao') {

            $procEnvio->__set('tableName', $_POST['tableName']);
            $procEnvio->__set('codigo', $_POST['codigo']);
            $procEnvio->__set('nome', $_POST['nome']);

        } else {

            $procEnvio->__set('tableName', $_POST['tableName']);
            $procEnvio->__set('codigo', $_POST['codigo']);
            $procEnvio->__set('nome', $_POST['nome']);
            $procEnvio->__set('conc_final', $_POST['conc_final']);
            $procEnvio->__set('prisma_sabi', $_POST['prisma_sabi']);
            $procEnvio->__set('reatnb_plenus', $_POST['reatnb_plenus']);
            $procEnvio->__set('situacao', $_POST['situacao']);   
                 
        }

        if ($_POST) {

            $procEnvio->update($tableName, $id);        
           
        } else {
            echo "Erro";
        }

        $this->render('procEnvio', 'layoutPadrao');
    }

    public function delete () {

        $tableName = filter_input(INPUT_GET, 'nome');
        $tableId = filter_input(INPUT_GET, 'id');

        $delete = Container::getModel('CrudDbDelete');

        $delete->delete($tableName, $tableId);
    }

    public function addRegDb() {
        
        $tableName = filter_input(INPUT_POST, 'tableName');

        
        $add = Container::getModel('CrudDbCriarReg');
        $add->__set('codigo', $_POST['codigo']);
        $add->__set('nome', $_POST['nome']);

        if ($tableName != 'reativacao') {

            $add->__set('codigo', $_POST['codigo']);
            $add->__set('nome', $_POST['nome']);
            $add->__set('conc_final', $_POST['conc_final']);
            $add->__set('prisma_sabi', $_POST['prisma_sabi']);
            $add->__set('reatnb_plenus', $_POST['reatnb_plenus']);
            $add->__set('situacao', $_POST['situacao']);

        } 
                
        $add->addReg($tableName);    
    }
}
?>