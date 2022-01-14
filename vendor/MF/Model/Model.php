<?php

namespace MF\Model;

interface CRUD {
    public function add($tbName);
    public function findAll($tbName);
    public function findById($tbName);
    public function update($tbName);
    public function delte($tbName);
}

abstract class Model {

    protected $db;

    public function __construct(\PDO $db) {
        $this->db = $db;
    }


    /* Adicionar Registros */
    /* Adicionar no Cessação e Suspensão */
    public function addCesSus($tbName) {
        $sql = $this->db->prepare("INSERT INTO :table (
            id, codigo, nome, conc_final, prisma_sabi, reatnb_plenus, situacao)
            VALUES (
            :id, :codigo, :nome, :conc_final, :prisma_sabi, :reatnb_plenus, :situacao)");

        $sql->bindValue(':table', $tbName);
        //$sql->bindValue(':id', $id);
        $sql->bindValue(':codigo'); /* Somente adcionar o que vamos alterar */
        $sql->bindValue(':nome'); /* Somente adcionar o que vamos alterar */
        $sql->bindValue(':conc_final'); /* Somente adcionar o que vamos alterar */
        $sql->bindValue(':prisma_sabi'); /* Somente adcionar o que vamos alterar */
        $sql->bindValue(':reatnb_plenus'); /* Somente adcionar o que vamos alterar */
        $sql->bindValue(':situacao'); /* Somente adcionar o que vamos alterar */
        $sql->execute();
    }

    /* Adicionar no Reativação */
    public function addReativacao ($tbname) {
        $sql = $this->db->prepare("INSERT INTO :table (
            id, codigo, nome, conc_final, prisma_sabi, reatnb_plenus, situacao)
            VALUES (
            :id, :codigo, :nome)");

        $sql->bindValue(':table', $tbName);
        //$sql->bindValue(':id', $id);
        $sql->bindValue(':codigo'); /* Somente adcionar o que vamos alterar */
        $sql->bindValue(':nome'); /* Somente adcionar o que vamos alterar */
        $sql->execute();
    }


    /* Chamar todos os registros */
    public function findAll($tbName) {
        $sql = "SELECT * FROM {$tbName}";
        return $this->db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }

    /* Chamar os registros com base no ID */
    public function findById($tbName, $id) {
        $sql = "SELECT * FROM {$tbName} WHERE id_{$tbName} = {$id}";
        return $this->db->query($sql)->fetchAll();
        
    }

    /* Fazer o Update dos registros de Cessação e Suspensão */
    public function updateCesSus($tbName, $id, $codigo, $nome, $conc_final, $prisma_sabi, $reatnb_plenus, $situacao) {
        $sql = $this->db->prepare("UPDATE :table SET codigo = :codigo, nome = :nome, conc_final = :conc_final, prisma_sabi = :prisma_sabi, reatnb_plenus = :reatnb_plenus, situacao = :situacao WHERE id = :id");
        $sql->bindValue(':table', $tbName);
        $sql->bindValue(':id', $id);
        $sql->bindValue(':codigo', $codigo); /* Somente adcionar o que vamos alterar */
        $sql->bindValue(':nome', $nome); /* Somente adcionar o que vamos alterar */
        $sql->bindValue(':conc_final', $conc_final); /* Somente adcionar o que vamos alterar */
        $sql->bindValue(':prisma_sabi', $prisma_sabi); /* Somente adcionar o que vamos alterar */
        $sql->bindValue(':reatnb_plenus',$reatnb_plenus); /* Somente adcionar o que vamos alterar */
        $sql->bindValue(':situacao', $situacao); /* Somente adcionar o que vamos alterar */
        $sql->execute();

        require_once '/Editar';
    }

    /* Fazer o Update dos registros de Reativação */
    public function updateReativacao($tbName, $id, $codigo, $nome) {
        $sql = $this->db->prepare("UPDATE :table SET codigo = :codigo, nome = :nome WHERE id = :id");
        $sql->bindValue(':table', $tbName);
        $sql->bindValue(':id', $id);
        $sql->bindValue(':codigo', $codigo); /* Somente adcionar o que vamos alterar */
        $sql->bindValue(':nome', $nome); /* Somente adcionar o que vamos alterar */

        header('Location: /Editar');
    }



    /* Fazer o Delete pelo ID */
    public function delte($tbName, $id) {
        $sql = $this->db->query("DELETE FROM :table WHERE id = :id");
        $sql->bindValue(':table', $tbName);
        $sql->bindValue(':id', $id);
        $sql->execute();

        require_once '/Editar';
    }

}

?>