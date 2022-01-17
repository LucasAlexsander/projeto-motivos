<?php

namespace App\Models;

use MF\Model\Model;

class CrudDbDelete extends Model {

    public function delete($tableName, $id) {    

        $query = "delete from {$tableName} where id_{$tableName} = {$id}";
        $resultado = $this->db->query($query)->execute();

        if ($resultado) {
            echo 'Excluido';
        } else {
            echo 'False';
        }


        header('Location: /admin?tb='.$tableName.'&status=excluido');
        exit;        
    }

}