<?php

namespace App;

class Connection {

    public static function getDb () {
        try {
            $dbType = 'mysql';
            $dbName = 'motivos';
            $dbPath = 'localhost';
            $dbCharset = 'utf8';
            $dbUser = 'root';
            $dbPass = '';

            $pdo = new \PDO( // \ para indicar que a class fica na pasta raiz do php
                
                "{$dbType}:dbname={$dbName};host={$dbPath};charset={$dbCharset}",
                $dbUser,
                $dbPass
            );

            return $pdo; //Precisamos returnar o $pdo para efetuar a conexão

        } catch (\PDOException $e) {
            //..Tratar de alguma forma..//
            echo "Erro não foi possível conectar ao banco de dados. <br>";
            echo "<span>Mensagem Erro:</span> " . $e->getMessage() . ".<hr>";
            exit;

            echo '<pre>';
            print_r($e);
            echo '</pre>';
        }
    }
}

?>