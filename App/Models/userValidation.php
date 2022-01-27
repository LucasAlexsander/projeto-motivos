<?php 

namespace App\Models;

use MF\Model\Model;

class userValidation extends Model {

    public function findBySIAPE ($SIAPE, $senha) {

        $query = "SELECT * FROM users WHERE SIAPE = :SIAPE";
        $sql = $this->db->prepare($query);
        $sql->bindValue(':SIAPE', $SIAPE);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetchAll(\PDO::FETCH_ASSOC);

            foreach ($dados as $item) {
                
                //Validando Usuário
                if ($item['SIAPE'] === $SIAPE && $item['senha'] === $senha) {
                    session_start();
                    $_SESSION['conectado'] = 1;
                    $_SESSION['profile_type'] = $item['profile_type'];
                    header('Location: /home');

                }
            }

        } else {
            header('Location: /?erro=userInvalido');
        }     
    }
}
?>