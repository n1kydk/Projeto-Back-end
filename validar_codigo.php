<?php

session_start(); // Iniciar a sessão

ob_start(); // Limpar o buffer de saída

date_default_timezone_set('America/Sao_Paulo');

include_once "./conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F2A</title>
</head>

<body>

    <h2>Digite o código enviado no e-mail cadastrado</h2>

    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['ValCodigo'])) {
        
        $query_usuario = "SELECT id, nome, usuario, senha_usuario 
                    FROM usuarios
                    WHERE id =:id
                    AND usuario =:usuario
                    AND codigo_autenticacao =:codigo_autenticacao
                    LIMIT 1";

        $result_usuario = $conn->prepare($query_usuario);

        $result_usuario->bindParam(':id', $_SESSION['id']);
        $result_usuario->bindParam(':usuario', $_SESSION['usuario']);
        $result_usuario->bindParam(':codigo_autenticacao', $dados['codigo_autenticacao']);

        $result_usuario->execute();

        if (($result_usuario) and ($result_usuario->rowCount() != 0)) {

            $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);

            $query_up_usuario = "UPDATE usuarios SET
                    codigo_autenticacao = NULL,
                    data_codigo_autenticacao = NULL
                    WHERE id =:id
                    LIMIT 1";

            // Preparar a QUERY
            $result_up_usuario = $conn->prepare($query_up_usuario);

            // Substituir o link da QUERY pelo valores
            $result_up_usuario->bindParam(':id', $_SESSION['id']);

            // Executar a QUERY
            $result_up_usuario->execute();

            // Salvar os dados do usuário na sessão
            $_SESSION['nome'] = $row_usuario['nome'];
            $_SESSION['codigo_autenticacao'] = true;            

            // Redirecionar o usuário
            header('Location: index.php');
        }else{
            $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Código inválido!</p>";
            
        }
    }

    
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

<style>
       body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #8A2BE2, #FFFFFF);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column; 
        }

        h2 {
            text-align: center;
            color: #333; 
            margin-bottom: 20px; 
        }

        form {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333; 
        }

        input {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #8A2BE2;
            color: #fff; 
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #6A1B9A; 
        }

        p {
            color: #f00; 
        }
        button {
            background-color: #8A2BE2;
            color: #FFFFFF;
            border: none;
            padding: 10px 15px;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #6A1B9A;
             }
    </style>

    <form method="POST" action="">
        <label>Código: </label>
        <input type="text" name="codigo_autenticacao" placeholder="Digite o código"><br><br>

        <input type="submit" name="ValCodigo" value="Validar"><br><br>
        
        <button><a href="mailtrap.php">Não sabe como? Clique aqui</a></button>
    </form><br>
</body>

</html>