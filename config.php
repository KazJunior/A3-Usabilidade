<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario';

    
    if ($conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName)) {
        ;
    } else {
        echo "Erro!";
    }
?>