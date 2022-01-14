<?php

namespace App\Controllers;

//Recursos do miniframework (MF)
use MF\Controller\Action;
use MF\Model\Container;
//Os models


class ErrorController extends Action {    

    public function index() { 

        $this->render('404');
    }
}


?>