<?php
    error_reporting(0);
    require_once "./mysql.php";
    require_once "../Classes/PHPExcel.php";

    //  Realiza a busca na base de dados
    $con = new Conexao();
    $link = $con->conexao();
    
    $query = file_get_contents('SQL/Motivos.sql');
    $sql = $link->prepare($query);
    
    if($sql->execute()){
        echo '
            <script language= "JavaScript">
                location.href="index.php";
            </script>
        ';
    }

?>
