<?php 

namespace App\Models;

use MF\Model\Model;

class CrudDbUpdate extends Model {

    public function update($tableName, $id) {

        //Atribuindo os valores
        $this->__set('codigo', $_POST['codigo']);
        $this->__set('nome', $_POST['nome']);
        //Pegando os valores
        $codigo = $this->__get('codigo');
        $nome = $this->__get('nome');


        if ($tableName != 'reativacao') {
            //Atribuindo os valores
            $this->__set('conc_final', $_POST['conc_final']);
            $this->__set('prisma_sabi', $_POST['prisma_sabi']);
            $this->__set('reatnb_plenus', $_POST['reatnb_plenus']);
            $this->__set('situacao', $_POST['situacao']);    
            //Pegando os valores
            $conc_final = $this->__get('conc_final');
            $prisma_sabi = $this->__get('prisma_sabi');
            $reatnb_plenus = $this->__get('reatnb_plenus');
            $situacao = $this->__get('situacao');

        }        

        if ( $tableName == 'reativacao') {

            $query = "update {$tableName} set codigo = '{$codigo}', nome = '{$nome}' where id_reativacao = {$id}";
            $sql = $this->db->query($query)->execute();

        }  else {

            $query = "update {$tableName} set codigo = '{$codigo}', nome = '{$nome}', conc_final = '{$conc_final}', prisma_sabi = '{$prisma_sabi}', reatnb_plenus = '{$reatnb_plenus}', situacao = '{$situacao}' where id_{$tableName} = {$id}";
            $sql = $this->db->query($query)->execute();

        }
        return true;
    }
}
?>