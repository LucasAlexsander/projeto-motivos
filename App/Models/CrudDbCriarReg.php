<?php

namespace App\Models;

use MF\Model\Model;

class CrudDbCriarReg extends Model {


    public function addReg($tableName) {

        $codigo = $this->__get('codigo');
        $nome = $this->__get('nome');
        $conc_final = $this->__get('conc_final');
        $prisma_sabi = $this->__get('prisma_sabi');
        $reatnb_plenus = $this->__get('reatnb_plenus');
        $situacao = $this->__get('situacao');


        if ( $tableName === 'reativacao') {

            $query = "insert into {$tableName} (codigo, nome) value ('{$codigo}', '{$nome}')";
            $this->db->query($query)->execute();
            
        }  else {

            $query = "insert into {$tableName} (codigo, nome, conc_final, prisma_sabi, reatnb_plenus, situacao) value ('{$codigo}', '{$nome}', '{$conc_final}', '{$prisma_sabi}', '{$reatnb_plenus}', '{$situacao}')";
            $this->db->query($query)->execute();  

        }        
        header('Location: /admin?Enviado');
    }
}
?>