<?php 

namespace App\Models;

use MF\Model\Model;

class Reativacao extends Model {

    private $tbName = "reativacao";

    public function getReativacao () {

        $sql = "SELECT * FROM reativacao";
        return $this->db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);

    }

    
}
?>