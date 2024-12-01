<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabeçalho">
        <a href="index.html" class="logo"><i class='bx bx-home-alt-2'></i>Menu</a>
        <h1 id="cadastro">Cadastre-se</h1>
        <img class="log" src="./images/lulu da pomerânia.png" alt="logo da loja">
    </header>
<!--Criação do form de cadastro-->
    <section class="cadastro" id="cadastro">
        <div class="form-container">
            <form class="form-cadastro" action="cadastro_script.php" method="POST">
                <div class="img-form-cadastro">
                    <img src="./images/desenho-form.jpg">
                </div>    
                <div class="form-row">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite o seu nome" required>
                    </div>
                    <div class="input-box">
                        <label for="endereco">Endereco</label>
                        <input id="endereco" type="text" name="endereco" placeholder="Digite o seu endereco" required>
                    </div>
                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite a sua senha" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-box">
                        <label for="CPF">CPF</label>
                        <input id="CPF" type="number" name="CPF" placeholder="Digite o seu CPF" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Digite o seu email" required>
                    </div>
                    <div class="confirm-button">
                        <button type="submit">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>