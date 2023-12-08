<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/CSS/criarconta.css" >
    <link rel="stylesheet" type="text/css" href="./public/fonta/css/all.min.css" >
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <title>Tela de Cadastro</title>
  
</head>
<body>
<h1 id="seven">7Events</h1>
<form>
    <label for="pais"><i class="fas fa-globe"></i> País:</label>
    <input type="text" id="pais" name="pais" required>

    <label for="nome"><i class="fas fa-user"></i> Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="cpf"><i class="fas fa-id-card"></i> CPF:</label>
    <input type="text" id="cpf" name="cpf" required>

    <label for="email"><i class="fas fa-envelope"></i> E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="senha"><i class="fas fa-lock"></i> Senha:</label>
    <input type="password" id="senha" name="senha" required>

    <label for="telefone"><i class="fas fa-phone"></i> Telefone:</label>
    <input type="tel" id="telefone" name="telefone" required>

    <label for="endereco"><i class="fas fa-map-marker-alt"></i> Endereço:</label>
    <input type="text" id="endereco" name="endereco" required>

    <a href="/index/index.html">Criar Conta</a>

    <div class="social-icons">
        <a href="#" class="fab fa-google"></a>
        <a href="#" class="fab fa-facebook"></a>
    </div>

    <div class="login-link">
        <p>Já possui uma conta? <a href="<?=linkrota("login")?>">Faça login aqui</a></p>
    </div>
</form>

</body>
</html>