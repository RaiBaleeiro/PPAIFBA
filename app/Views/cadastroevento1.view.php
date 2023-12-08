<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="./public/css/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">

</head>



<body>
<div class="zoom">
    <header>
        <h1 id="titulo"><b>Crie seu evento:</b></h1>
    </header>
    <div class="container">
    <img src="./public/imagens/Fundo-Cadastro.PNG" class="imag">
    <div class="texto">"Nosso esforço e trabalho em<br>prol da Ciência e Educação"</div>
    </div>


    <form class="paises">
        <label for="paises">País:</label><br>
        <select name="paises" id="paises">
            <option value="Brasil">Brasil</option>
            <option value="Argentina">Argentina</option>
            <option value="Chile">Chile</option>
            <option value="Paraguai">Paraguai</option>
          </select>
        <br><br>
      </form>

      <form class="nome">
        <label for="evento">Nome do Evento:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
      </form> 

      <form class="quant">
        <label for="quant">Quantidade de Participantes Esperada:</label><br>
        <select name="quant" id="quant">
            <option value="30 pessoas">30 Pessoas</option>
            <option value="150 pessoas">150 Pessoas</option>
            <option value="500 pessoas">500 Pessoas</option>
            <option value="2000 pessoas">2000 Pessoas</option>
          </select>
        <br><br>
      </form>

      <form class="categ">
        <label for="categ">Categoria do Evento</label><br>
        <select name="categ" id="categ">
            <option value="tecnologico">Tecnológico</option>
            <option value="Corporativo">Corporativo</option>
            <option value="Educativo">Educativo</option>
            <option value="esportivo">esportivo</option>
            <option value="social">Social</option>
            <option value="cultural">Cultural</option>
          </select>
        <br><br>
      </form>

      <form>
        <label class="radio1">
          <input type="radio" name="presencial" checked>Presencial
        </label>
        <label class="radio2">
          <input type="radio" name="online">Online
        </label>
        <label class="radio3">
          <input type="radio" name="hibrido">Híbrido
        </label>
      </form>

      <button onclick="document.location.replace('<?=linkrota("cadastro2")?>')" type="button" class="butao">Próxima Etapa</button>
</div>
</body>
</html>