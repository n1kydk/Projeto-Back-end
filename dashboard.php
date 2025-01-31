<?php

session_start(); // Iniciar a sessão

ob_start(); // Limpar o buffer de saída

date_default_timezone_set('America/Sao_Paulo');

if((!isset($_SESSION['id'])) and (!isset($_SESSION['usuario'])) and (!isset($_SESSION['codigo_autenticacao']))){
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Necessário realizar o login para acessar a página!</p>";

    header("Location: login.php");

    exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Dashboard</title>
</head>

<body>
    <h2>Bem-vindo <?php echo $_SESSION['nome']; ?></h2>

    <a href="sair.php">Sair</a>

</body>

</html>