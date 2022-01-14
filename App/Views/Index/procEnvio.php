<?php



echo '<pre>';
print_r($_POST);
echo '</pre>';

$tabName = filter_input(INPUT_POST, 'tableName');
$tbId = filter_input(INPUT_POST, 'id');
$tbCodigo = filter_input(INPUT_POST, 'codigo');
$tbNome = filter_input(INPUT_POST, 'nome');




echo $tabName;




