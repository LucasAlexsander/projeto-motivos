<?php

namespace MF\Model;

abstract class Model {
    
    //Dados Tabela Users
    private string $senha = "";
    private string $email = "";
    private int $SIAPE;
    private int $profileType;
    //Universais
    private string $nome = "";
    private int $id;
    private string $tableName;
    //Tabelas do motivos
    private string $codigo = "";
    private $conc_final = "";
    private $prisma_sabi = "";
    private $reatnb_plenus = "";
    private $situacao = "";
    
    protected $db;

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __construct(\PDO $db) {
        $this->db = $db;
    }
}
?>