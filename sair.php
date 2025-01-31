<?php

session_start(); // Iniciar a sessão

ob_start(); // Limpar o buffer de saída

unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['usuario'], $_SESSION['codigo_autenticacao']);

if((!isset($_SESSION['id'])) and (!isset($_SESSION['usuario'])) and (!isset($_SESSION['codigo_autenticacao']))){
    $_SESSION['msg'] = "<p style='color: green;'>Deslogado com sucesso!</p>";

    header("Location: login.php");

    exit();
}

?>