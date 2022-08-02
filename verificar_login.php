<?php
    session_start();
    if(!$_SESSION['usuario']){
        header('Location: index.php');
        echo('login negado');
        exit();
    }
?>