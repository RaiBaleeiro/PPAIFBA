<!DOCTYPE html>
<html lang="pt-br">


<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos</title>
  <link rel="stylesheet" href="./public/CSS/cadastro2.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">

</head>


<body>

    <header>
        <h1 id="titulo"><b>Crie seu evento:</b></h1>
    </header>


    <form class="endereco">
      <label for="evento">Endereço:</label><br>
      <input type="text" id="fname" name="fname" value=""><br>
    </form> 

    <form class="num">
      <label for="evento">Número</label><br>
      <input type="text" id="fname" name="fname" value=""><br>
    </form> 

    <form class="bairro">
      <label for="evento">Bairro:</label><br>
      <input type="text" id="fname" name="fname" value=""><br>
    </form> 

    <form class="quantsala">
      <label for="evento">Quantidade de salas:</label><br>
      <input type="text" id="fname" name="fname" value=""><br>
    </form>


      <form>
        <label class="radio1">
          <input type="radio" name="presencial" checked>
        </label>
        <label class="radio2">
          <input type="radio" name="online">
        </label>
        <label class="radio3">
          <input type="radio" name="hibrido">
        </label>
      </form>

      <h1 id="pix1">PIX</h1>
      <img src="./public/imagens/Logo_-_pix_powered_by_Banco_Central_(Brazil,_2020).png" id="piximg">
      <img src="./public/imagens/cute-3d-credit-card-illustration-design-free-png.webp" id="cartaoimg">
      <img src="./public/imagens/5899792.png" id="dinheiropng">

      <form class="chave">
        <label for="chave">Chave Pix:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
      </form>

      <form class="link">
        <label for="link">Link de Acesso Virtual:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
      </form>


      <p id="radioh1">Terá Certificado:</p>
      <form>
        <label class="radio4">
          <input type="radio" name="presencial" checked>
        </label>
        <label class="radio5">
          <input type="radio" name="online">
        </label>
      </form>
        <p id="sim">SIM</p>
        <P id="nao">NÃO</P>

      <form class="maximo">
        <label for="chave">Máximo de Usuários Suportados:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
      </form>


      <button onclick="document.location.replace('<?=linkrota("inicial")?>')" type="button" class="butao">Próxima Etapa</button>

</body>
</html>