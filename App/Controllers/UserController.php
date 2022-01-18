<?php

namespace App\Controllers;

//Recursos do miniframework (MF)

use MF\Controller\Action;
use MF\Model\Container;





class UserController extends Action { 

    public function loginConfirm() {

        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        $senha = filter_input(INPUT_POST, 'senha');
        $SIAPE = filter_input(INPUT_POST, 'SIAPE');

        echo 'SIAPE: '. $SIAPE . ' <br>';
        echo 'senha: '. $senha . ' <br>';

        $findSiape = Container::getModel('userValidation');
        $findSiape->findBySIAPE($SIAPE, $senha);
    }
}