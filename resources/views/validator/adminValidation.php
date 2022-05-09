<?php 
if ($_SESSION['profile_type'] != 1) {
    header('Location: /home?erro=userInvalido');
}

