<?php

require 'verifica.php';

if(isset($_SESSION['id_usuario']) && !empty ($_SESSION['id_usuario'])): ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel ="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="fontawesome-free-5.15.3-web/js/all.min.js"></script>
    <title>Perfil</title>
</head>
<body class="back2">
<header class="cabeçalho">
        <a href="index.html" class="logo"><i class='bx bx-home-alt-2'></i>Menu</a>
        <h1>Bem vindo, <?php echo$nomeUser ?></h1>
        <img class="log" src="../images/lulu da pomerânia.png" alt="logo da loja">
</header>
    <div class="main-container">
    <div class="container">
        <div class="layer"></div>
        <div class="detail">
            <p><?php echo $nomeUser?></p>
        </div>
        <div class="btn">
            <a class="out-btn" href="logout.php">Sair</a>
        </div>
    </div>
    </div>
    <?php else: header("Location: login.php"); endif; ?>
</body>
</html>