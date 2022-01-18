<?php 

require_once 'userValidation.php';
require_once 'adminValidation.php';

$status = ucfirst(filter_input(INPUT_GET, 'status')); 
$tbName = filter_input(INPUT_GET, 'tb');

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