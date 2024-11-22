<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            include "config.php";


            $nome = $_POST['nome'];
            $cpf = $_POST['CPF'];
            $endereco = $_POST['endereco'];
            $senha = $_POST['senha'];
            $csenha = $_POST['csenha'];
            $email = $_POST['email'];

            $sql = "INSERT INTO usuarios (nome, cpf, endereço,senha,confirma_senha, email) VALUES
            ('$nome', '$cpf', '$endereco', '$senha', '$csenha', '$email')";

            if (mysqli_query($conn, $sql)) {
                echo "Cadastro concluído com sucesso";
            } else {
                echo "Falha ao cadastrar dados, tente novamente";
            };
            ?>

            <a href="login.html" class="voltar">Voltar</a>
        </div>
    </div>
</body>
</html>