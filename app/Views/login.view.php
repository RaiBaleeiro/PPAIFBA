<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login com Ícones</title>
    <link rel="stylesheet" type="text/css" href="./public/fonta/css/all.min.css" >
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            position: relative;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        label {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            font-weight: bold;
        }

        label i {
            margin-right: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        a {
            display: block;
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
        }

        a:hover {
            background-color: #2980b9;
        }

        .social-icons {
            text-align: center;
            margin-bottom: 16px;
        }

        .social-icons a {
            display: inline-block;
            margin-right: 8px;
            font-size: 24px;
            color: #333;
        }

        .login-link {
            text-align: center;
        }
    </style>
</head>
<body>

    <form>
        <label for="email"><i class="fas fa-envelope"></i> E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha"><i class="fas fa-lock"></i> Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <a href="<?=linkrota("inicial")?>">Entrar</a>

        <div class="social-icons">
            <a href="#" class="fab fa-google"></a>
            <a href="#" class="fab fa-facebook"></a>
        </div>

        <div class="login-link">
            <p>Ainda não possui uma conta? <a href="<?=linkrota("criarconta")?>">Cadastre-se aqui</a></p>
        </div>
    </form>

</body>
</html>
