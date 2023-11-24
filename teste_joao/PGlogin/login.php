<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="page">
        <form method="POST" class="formLogin" id="loginForm">
            <h1 id="top">Login</h1>
            <p>Digite os seus dados de acesso nos campos abaixo.</p>
            <label for="email">Login</label>
            <input type="email" id="email" placeholder="Digite seu Login" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" id="password" placeholder="Digite sua senha" />
            <a href="/">Esqueci minha senha</a>
            <a href="/typing-game/teste_joao\PGcadastro\cadastro.php">Não possuo conta</a>
            <input type="submit" value="Acessar" class="btn" />
        </form>
        <script src="login.js" defer></script>

</body>

</html>