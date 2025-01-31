<?php

session_start();
ob_start();

date_default_timezone_set('America/Sao_Paulo');

include_once "./conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastrar</title>
</head>
<body>
    

    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['SendCaduser'])){
        var_dump($dados);

        $senha_cripto = password_hash($dados['senha_usuario'], PASSWORD_DEFAULT);

        $query_usuario = "INSERT INTO usuarios (nome, usuario, senha_usuario, data_nascimento, sexo, nome_materno, cpf, telefone_celular, telefone_fixo, endereco_completo) VALUES (:nome, :usuario, :senha_usuario, :data_nascimento, :sexo, :nome_materno, :cpf, :telefone_celular, :telefone_fixo, :endereco_completo)";

        $cad_usuario = $conn->prepare($query_usuario);

        $cad_usuario->bindParam(':nome', $dados['nome']);
        $cad_usuario->bindParam(':usuario', $dados['usuario']);
        $cad_usuario->bindParam(':senha_usuario', $senha_cripto);
        $cad_usuario->bindParam(':data_nascimento', $dados['data_nascimento']);
        $cad_usuario->bindParam(':sexo', $dados['sexo']);
        $cad_usuario->bindParam(':nome_materno', $dados['nome_materno']);
        $cad_usuario->bindParam(':cpf', $dados['cpf']);
        $cad_usuario->bindParam(':telefone_celular', $dados['telefone_celular']);
        $cad_usuario->bindParam(':telefone_fixo', $dados['telefone_fixo']);
        $cad_usuario->bindParam(':endereco_completo', $dados['endereco_completo']);

        $cad_usuario->execute();

        if($cad_usuario->rowCount()){
            $_SESSION['msg'] = "<p style='color: green'>Usuário cadastrado com sucesso!</p>";
            header("Location: login.php");
            exit();
        }else{
            $_SESSION['msg'] = "<p style='color: #f00'>Erro: Usuário não cadastrado com sucesso!</p>";
        }
    }

    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    
    <div class="box">
        <form method="POST" action="">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">  
                <input type="text" pattern="[A-Za-z ]+" name="nome" id="Nome" class="inputUser" required minlength="15" maxlength="80">
<label for="Nome" class="labelInputnome">Nome Completo</label>

                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" pattern="[A-Za-z]+" title="Evite números!" name="senha_usuario" id="Senha" class="inputUser" required maxlength="8" minlength="8">
                    <label for="Senha" class="labelInputsec">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email"  name="usuario" id="email"  class="inputUser" required>
                    <label for="email" class="labelInputsec">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel"  name="telefone_celular" id="celular" class="inputUser" required>
                    <label for="celular" class="labelInputsec">Celular</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel"  name="telefone_celular" id="celular" class="inputUser" required>
                    <label for="celular" class="labelInputsec">Telefone Fixo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco_completo" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInputendereco">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number_format" name="cpf" id="cpf" class="inputUser"   maxlengtn="11" required>
                    <label for="cpf" class="labelInputcpf">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome_materno" id="nome_materno" class="inputUser" required>
                    <label for="nome_materno" class="labelInputnome">Nome Materno</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <label>Data de Nascimento: </label>
        <input type="text" name="data_nascimento" placeholder="Formato: YYYY-MM-DD"><br><br>
                </div>
                <label>Sexo: </label>
                <select name="sexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select><br><br>
                <input type="submit" name="SendCaduser" id="submit" value="Cadastrar"><br><br>
                <input type="reset" name="Limpar" id="submit"  value="Limpar">

        </form>

        <button id="submit"><a href="login.php">Já tem uma conta? Faça Login!</a></button><br><br>
<style>
    a {
        color: white;
    }
</style>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('input[name="data_nascimento"]').addEventListener('input', function() {
            var dataNascimento = this.value;

            var dataNumerica = dataNascimento.replace(/\D/g, '');

            if (dataNumerica.length >= 8) {
                var ano = dataNumerica.substring(0, 4);
                var mes = dataNumerica.substring(4, 6);
                var dia = dataNumerica.substring(6, 8);
                this.value = ano + '-' + mes + '-' + dia;
            }
        });
    });
</script>

</body>

</html>
