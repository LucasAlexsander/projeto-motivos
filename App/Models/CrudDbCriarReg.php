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
        echo $tableName . '<hr>';

        if ( $tableName === 'reativacao' ) {
            echo 'True';

            $query = "insert into {$tableName} (codigo, nome) value ('{$codigo}', '{$nome}')";
            $this->db->query($query)->execute();
            
            
        } else {
            echo 'False';
            $query = "insert into {$tableName} (codigo, nome, conc_final, prisma_sabi, reatnb_plenus, situacao) value ('{$codigo}', '{$nome}', '{$conc_final}', '{$prisma_sabi}', '{$reatnb_plenus}', '{$situacao}')";
            $this->db->query($query)->execute();

        }       
        return true;
    }
}
?>