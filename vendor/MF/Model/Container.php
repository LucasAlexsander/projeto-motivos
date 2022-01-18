<?php

namespace MF\Model;
use App\Connection;

class Container {

    public static function getModel($model) {

        $class = "\\App\\Models\\".ucfirst($model);
        //Retornar o modelo solicitado já instânciado, inclusive com a conexão estabelecida

        //Instância de conexão
        $pdo = Connection::getDb();

        //Instanciar modelo
        return new $class($pdo);
    }

}


?>