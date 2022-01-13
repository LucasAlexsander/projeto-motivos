<?php
    include_once './mysql.php';

    //  Realiza a busca na base de dados
    $con = new Conexao();
    $link = $con->conexao();

    $keyword = '%'.$_POST['keyword'].'%';
    $tab = $_POST['tab'];

    if(strcmp($tab, "nav-Motces") == 0){
        $query = "SELECT * FROM cessacao WHERE (concat(codigo,' - ', nome) LIKE (:keyword)) ORDER BY id_cessacao;";
    } else if(strcmp($tab, "nav-Motsus") == 0) {
        $query = "SELECT * FROM suspensao WHERE (concat(codigo,' - ', nome) LIKE (:keyword)) ORDER BY id_suspensao;";
    }    
    $sql = $link->prepare($query);
    
    $sql->bindParam(':keyword', $keyword, PDO::PARAM_STR);

    $sql->execute();
    
    $list = $sql->fetchAll();

    if ($list != null){
        foreach ($list as $rs) {
            // put in bold the written text
            $motivo = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', ($rs['codigo'] . ' - ' . $rs['nome']));
            // add new option
            echo '<li class="list-group-item" style="cursor: pointer" onclick="set_item(\''. ($rs['codigo'] . ' - ' . $rs['nome']) .'\')">'.$motivo.'</li>';
        }
    } else {
        echo '<li class="list-group-item">'."Não existe motivo.".'</li>';
    }
?>