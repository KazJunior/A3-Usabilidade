<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "carepets";

    $conexao = new mysqli($server,$user,$pass,$bd);

    if ($conn = mysqli_connect($server, $user, $pass, $bd) ) {
        ;
    } else {
        echo "Erro!";
    }

?>