<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Redirecionado</title>
</head>
<body>
    <div>
        <div>
            <?php
            include 'cadastro_conecta.php';

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $endereco = $_POST['endereco'];
                $cpf = $_POST['CPF'];

                $sql = "INSERT INTO `usuario`(`nome`, `email`, `senha`, `endereco`, `CPF`) VALUES 
                ('$nome','$email','$senha','$endereco','$cpf')";

                if(mysqli_query($conn, $sql)) {
                    echo '<script> alert ("Cadastro realizado com sucesso!"); location.href=("login.php")</script>';
                } else {
                    echo '<script> alert ("Erro no cadastro!"); location.href=("cadastro.php")</script>';
                }
            ?>
        </div>
    </div>
</body>
</html>