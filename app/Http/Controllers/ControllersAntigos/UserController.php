<?php

namespace App\Controllers;

//Recursos do miniframework (MF)

use MF\Controller\Action;
use MF\Model\Container;



class UserController extends Action { 

    public function loginConfirm() {

        $senha = filter_input(INPUT_POST, 'senha');
        $SIAPE = filter_input(INPUT_POST, 'SIAPE');

        $findSiape = Container::getModel('userValidation');
        $findSiape->findBySIAPE($SIAPE, $senha);
    }
}