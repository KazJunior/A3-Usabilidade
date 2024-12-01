<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

require 'conexao.php';
require 'usuario.class.php';

$u = new Usuario();

$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

if($u->login($email, $senha) == true) {
    if(isset($_SESSION['id_usuario'])) {
        echo '<script> alert ("Login realizado com sucesso!"); location.href=("perfil.php")</script>';
    } else {
        echo '<script> alert ("Falha ao realizar o login!"); location.href=("login.php")</script>';
    }
} else {
    header("Location: login.php");
}

} else {

    header("Location: login.php");
}

?>