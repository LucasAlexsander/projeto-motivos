<?php 

namespace App\Models;

use MF\Model\Model;

class CrudDbFindId extends Model {

    public function findById ($tableName, $id) {

        $sql = "SELECT * FROM {$tableName} WHERE id_{$tableName} = {$id}";
        return $this->db->query($sql)->fetchAll();
    }
}
?>