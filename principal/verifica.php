<?php

require 'conexao.php';

if(isset($_SESSION['id_usuario']) && !empty ($_SESSION['id_usuario'])) {

    require_once 'usuario.class.php';
    $u = new Usuario();

    $listLogado = $u->logado($_SESSION['id_usuario']);
    $nomeUser = $listLogado['nome'];
    

} else {    
    header("Location: login.php");
}

?>