<?php

namespace App\Models;

use MF\Model\Model;

class CrudDbCriarReg extends Model {


    public function addRegDb($tableName) {      

        $this->__set('codigo', $_POST['codigo']);
        $this->__set('nome', $_POST['nome']);

        $codigo = $this->__get('codigo');
        $nome = $this->__get('nome');


        if ($tableName != 'reativacao') {

            $this->__set('conc_final', $_POST['conc_final']);
            $this->__set('prisma_sabi', $_POST['prisma_sabi']);
            $this->__set('reatnb_plenus', $_POST['reatnb_plenus']);
            $this->__set('situacao', $_POST['situacao']);

            $conc_final = $this->__get('conc_final');
            $prisma_sabi = $this->__get('prisma_sabi');
            $reatnb_plenus = $this->__get('reatnb_plenus');
            $situacao = $this->__get('situacao');

        } 

        if ( $tableName === 'reativacao' ) {

            $query = "INSERT INTO reativacao(codigo, nome) VALUE (:codigo, :nome)";
            $sql = $this->db->prepare($query);
            $sql->bindValue(':codigo', $codigo);
            $sql->bindValue(':nome', $nome);
            $sql->execute();  
            
            $lastId = $this->db->lastInsertId();
            
        } else {
            echo 'False';
            $query = "insert into {$tableName}(codigo, nome, conc_final, prisma_sabi, reatnb_plenus, situacao) value (:codigo, :nome, :conc_final, :prisma_sabi, :reatnb_plenus, :situacao)";
            $sql = $this->db->prepare($query);
            $sql->bindValue(':codigo', $codigo);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':conc_final', $conc_final);
            $sql->bindValue(':prisma_sabi', $prisma_sabi);
            $sql->bindValue(':reatnb_plenus', $reatnb_plenus);
            $sql->bindValue(':situacao', $situacao);
            $sql->execute();

            $lastId = $this->db->lastInsertId();
        }     
        $this->__set('lastId', $lastId);
        return true; 
    }
}
?>