<?php
	include_once './mysql.php';
	//  Realiza a busca na base de dados
    $con = new Conexao();
    $link = $con->conexao();
    $codigo = $_POST['codigo'];
    $tab = $_POST['tab'];
    if(strcmp($tab, "nav-Motces") == 0){
        $query = "SELECT * FROM cessacao WHERE codigo = (:codigo) LIMIT 1;";
    } else {
        $query = "SELECT * FROM suspensao WHERE codigo = (:codigo) LIMIT 1;";
    }    
    $sql = $link->prepare($query);
    
    $sql->bindParam(':codigo', $codigo, PDO::PARAM_STR);
    $sql->execute();
    
	$linha = $sql->fetch(PDO::FETCH_ASSOC);

	//Chamando o resto da função do search.php que está no Views
	require_once '../../resources/views/search.php';
?>
