<?php

namespace App;

class Connection {

    public static function getDb () {
        try {
            $dbType = 'mysql'; /* Tipo do banco de dados */
            $dbName = 'motivos'; /* Nome do banco de dados */
            $dbPath = 'localhost'; /* Local do banco de dados, pode ser em IP também */
            $dbCharset = 'utf8'; /* Tipo do banco de dados */
            $dbUser = 'root'; /* Usuario */
            $dbPass = ''; /* Senha */

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