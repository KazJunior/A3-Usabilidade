<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- or -->
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
<body class="back1">
    <header class="cabeçalho">
        <a href="index.html" class="logo"><i class='bx bx-home-alt-2'></i>Menu</a>
        <h1>Entre na sua conta, visitante!</h1>
        <img class="log" src="../images/lulu da pomerânia.png" alt="logo da loja">
    </header>
    <section class="login" id="login">
        <div class="lbox">
            <form action="logar.php" method="POST">
                <h1>Login</h1>
                <div class="caixinha">
                    <input type="text" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope' ></i>
                </div>
                <div class="caixinha">
                    <input type="password" name="senha" placeholder="Senha" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="esquecer">
                    <label><input type="checkbox">Remember</label>
                    <a href="#">Esqueceu sua senha?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="alternativa">
                    <p>Não tem uma conta?<a href="cadastro.php"> Registre-se</a></p>
                </div>
            </form>
        </div>
    </section>
</body>
</html>