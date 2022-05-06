<?php 


require_once 'userValidation.php'; /* Verificando se esta conectado */
require_once 'adminValidation.php'; /* Verificando se é admin o usuários */

$status = ucfirst(filter_input(INPUT_GET, 'status')); 
$tbName = filter_input(INPUT_GET, 'tb');
$lastId = filter_input(INPUT_GET, 'id');

if ($status === 'Excluido') {
    $status = 'Excluído';
}


if ($tbName === 'cessacao') {

    $tableName = 'Cessação';

} elseif ($tbName === 'reativacao') {

    $tableName = 'Reativação';

} elseif ($tbName === 'suspensao') {

    $tableName = 'Suspensão';

} elseif ($tbName === 'excluido') {

    $tableName = 'Excluido';
} 
?>