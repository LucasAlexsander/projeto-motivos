<?php 

namespace App\Models;

use MF\Model\Model;

class CrudDbFindAll extends Model {

    public function findAll($tbName) {
        $sql = "SELECT * FROM {$tbName}";
        return $this->db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>