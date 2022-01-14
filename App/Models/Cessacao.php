<?php 

namespace App\Models;

use MF\Model\Model;

class Cessacao extends Model {

    private $tbName = "cessacao";

    public function getCessacao () {

        $sql = "SELECT * FROM cessacao";
        return $this->db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);

    }
}
?>