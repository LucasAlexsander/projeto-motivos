<?php

session_start();
if ($_SESSION['conectado'] != 1) {

  header('Location: /?erro=loginNecessario');
  
}
?>