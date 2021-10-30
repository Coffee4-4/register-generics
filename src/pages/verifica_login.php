<?php
    session_start();
    $valor = isset($_SESSION['logado']) ? true : false;
    if (!$valor) {
        header('Location: index.php');
    }
?>