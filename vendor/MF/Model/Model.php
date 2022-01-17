<?php

namespace MF\Model;

abstract class Model {

    private string $tableName;
    private int $id;
    private string $codigo = "";
    private string $nome = "";
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