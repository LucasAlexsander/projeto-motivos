<?php

namespace App\Models;

use MF\Model\Model;

class CrudDbDelete extends Model {

    public function delete($tableName, $id) {    

        $query = "delete from {$tableName} where id_{$tableName} = {$id}";
        $this->db->query($query)->execute();

        header('Location: /admin?Excluido');
        exit;        
    }

}