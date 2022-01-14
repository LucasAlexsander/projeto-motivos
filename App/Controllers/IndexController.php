<?php

namespace App\Controllers;

//Recursos do miniframework (MF)

use App\Models\CrudDbDelete;
use MF\Controller\Action;
use MF\Model\Container;
//Os models



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

    public function criarMot () {

        /* echo '<pre>';
        print_r($_POST);
        echo '</pre>'; */

        $editar = Container::getModel("CrudDbCriarMot");

        $tableName = $editar->__set('tableName', $_POST['tableName']);
        $editar->__set('id', $_POST['id']);
        $editar->__set('codigo', $_POST['codigo']);
        $editar->__set('nome', $_POST['nome']);
        $editar->__set('conc_final', $_POST['conc_final']);
        $editar->__set('prisma_sabi', $_POST['prisma_sabi']);
        $editar->__set('reatnb_plenus', $_POST['reatnb_plenus']);
        $editar->__set('situacao', $_POST['situacao']);

        echo '<pre>';
        print_r($_POST['tableName']);
        echo '</pre>';


        /* $editar->add($tableName); */
        
            


        $this->render('criarMot', 'layoutPadrao');
    }

    public function procEnvio () {

        $procEnvio = Container::getModel('CrudDbProcEnvio');

        echo '<pre>';
        echo "POST:";
        print_r($_POST);
        echo '</pre><hr>';

        $id = filter_input(INPUT_POST, 'id');
        
        $tableName = $procEnvio->__set('tableName', $_POST['tableName']);
        $procEnvio->__set('id', $_POST['id']);
        $procEnvio->__set('codigo', $_POST['codigo']);
        $procEnvio->__set('nome', $_POST['nome']);
        @$procEnvio->__set('conc_final', $_POST['conc_final']);
        @$procEnvio->__set('prisma_sabi', $_POST['prisma_sabi']);
        @$procEnvio->__set('reatnb_plenus', $_POST['reatnb_plenus']);
        @$procEnvio->__set('situacao', $_POST['situacao']);
        $tableNameVerif = $_POST['tableName'];

        echo '<pre>';
        echo "PROCENVIO:";
        print_r($procEnvio);
        echo '</pre><hr>';

        if ($_POST) {

            $procEnvio->update($tableNameVerif, $id);        
           
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

        $this->render('excluir', 'layoutPadrao');
    }

    public function addReg() {


        $this->render('addReg', 'layoutPadrao');
    }

}


?>