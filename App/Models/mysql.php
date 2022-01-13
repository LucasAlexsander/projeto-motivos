<?php
    class Conexao {

    private $link;
    private $servername = "127.0.0.1";
    private $username = "root";
    private $database = "Motivos";
    private $password = "dia0210";

    function __construct() {
        //  Versão Conexão
        $this->link = new PDO("mysql:host=$this->servername;dbname=$this->database;charset=utf8", "$this->username", "$this->password");
        
        $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function conexao() {
        if (!$this->link) {
            echo "Error: Conexão interrompida com MySQL." . PHP_EOL;
            return null;
        } else {
            //  echo "Sucesso!</br>";
            return $this->link;
        }
    }

    function busca($query) {
        $consulta = $this->link->prepare($query);
        $consulta->execute();
        $linha = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $linha;
    }

    }
?>
