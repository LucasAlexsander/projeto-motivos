<?php 

namespace App\Models;

use MF\Model\Model;

class CrudDbProcEnvio extends Model {

    public function update($tableName, $id) {

        echo $tableName . "<br>" . $id . "<br>";
        echo $this->__get('codigo');

        $codigo = $this->__get('codigo');
        $nome = $this->__get('nome');
        $conc_final = $this->__get('conc_final');
        $prisma_sabi = $this->__get('prisma_sabi');
        $reatnb_plenus = $this->__get('reatnb_plenus');
        $situacao = $this->__get('situacao');


        if ( $tableName == 'reativacao') {


            $query = "update {$tableName} set codigo = '{$codigo}', nome = '{$nome}' where id_reativacao = {$id}";
            $sql = $this->db->query($query)->execute();

            /* $sql = $this->db->preapre("UPDATE `reativacao` SET `nome` = 'Prorrogação de benefício.' WHERE `reativacao`.`id_reativacao` = 1;")->execute(); */

        }  else {

            $query = "update {$tableName} set codigo = '{$codigo}', nome = '{$nome}', conc_final = '{$conc_final}', prisma_sabi = '{$prisma_sabi}', reatnb_plenus = '{$reatnb_plenus}', situacao = '{$situacao}' where id_{$tableName} = {$id}";
            $sql = $this->db->query($query)->execute();

        }
        
        header('Location: /editar?id='.$id.'&nome='.$tableName);
    }
}
?>