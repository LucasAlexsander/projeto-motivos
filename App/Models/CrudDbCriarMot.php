<?php

namespace App\Models;

use MF\Model\Model;

class CrudDbCriarMot extends Model {


    public function add($tableName) {
        if($tableName == 'reativacao') {
            $sql = $this->db->prepare("INSERT INTO reativacao 
                (codigo, nome) 
                VALUES 
                (:codigo, :nome)");
    
            $sql->bindValue(':table', $this->__get('tableName'));
            $sql->bindValue(':codigo', $this->__get('codigo')); /* Somente adcionar o que vamos alterar */
            $sql->bindValue(':nome', $this->__get('nome')); /* Somente adcionar o que vamos alterar */
            $sql->execute();

            return $this;
        } else {
            $sql = $this->db->prepare("INSERT INTO :table 
                ( codigo, nome, conc_final, prisma_sabi, reatnb_plenus, situacao)
                VALUES 
                ( :codigo, :nome, :conc_final, :prisma_sabi, :reatnb_plenus, :situacao)");
    
            $sql->bindValue(':table', $this->__get('tableName'));
            $sql->bindValue(':codigo', $this->__get('codigo'));
            $sql->bindValue(':nome', $this->__get('nome'));
            $sql->bindValue(':conc_final', $this->__get('conc_final'));
            $sql->bindValue(':prisma_sabi', $this->__get('prisma_sabi'));
            $sql->bindValue(':reatnb_plenus', $this->__get('reatnb_plenus'));
            $sql->bindValue(':situacao', $this->__get('situacao'));
            $sql->execute();
        }


    }



}


?>