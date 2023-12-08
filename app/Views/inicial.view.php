<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos</title>
  <link rel="stylesheet" type="text/css" href="./public/fonta/css/all.min.css" >
  <link rel="stylesheet" href="./public/CSS/inicial.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">




</head>



<body>

  <header>
    <h1>7Events</h1>
    <h2 >Pesquisar eventos</h2> 
    <a href="#" class="cor"> <h2>shows</h2></a>
    <a href="#" class="cor"><h2>Teatros</h2></a>
    <a href="#" class="cor"><h2>Cursos</h2> </a>
    <a href="<?=linkrota("cadastro")?>" class="cor"> <h2>Crie seu Evento</h2></a>
    <a href="<?=linkrota("login")?>" class="cor"><h2>Acessar sua conta </h2></a>
    <a href="<?=linkrota("criarconta")?>" id="cadas"> CADASTRE-SE</a>
  </header>

  <h2 id="inter">Talvez você tenha interesse</h2>
  <div id="imgdiv">
     <a href="#"> <img src="./public/imagens/educacao.jpg" class="imag">  <p id="edu">Educação</p> </a>
     <a href="#"> <img src="./public/imagens/medico.jpg"  class="imag"> <p id="med">Medicina</p> </a>
     <a href="#"> <img src="./public/imagens/infor.png" class="imag"> <p id="arte">Artes E Humanidade</p> </a>
     <a href="#"> <img src="./public/imagens/nuvem.jpg" class="imag"> <p id="nuvem">Computação E Tecnologias</p> </a>
   </div>

  

  <section>
    <div class="event-card">
      <h2 class="event-title">Eventos em destaque na Seven</h2>

      
      

      <div class="texto-secitec">
       <a href="inscricao.view.php"> <img src="./public/imagens/secitec.png" alt="Evento 1" id="secitec"> </a>
        <div class="texto">
        <p class="event-date">Seg á Sex. Das 9:00 as 18:00</p>
        <p class="event-description">Um evento que irá tratar sobre o meio ambiente e tecnologias!</p>
        <p>Localização: Campus IFBA Brumado,BA</p>
       <a href="<?=linkrota("inscricao")?>"> <p id="detalhe">Ver Detalhes</p></a>
        </div>
      </div>
    </div>

  </section>

  <footer>
    <h3 id="even">7EVENTS</h3>
    <div class="media">
        <div>
            <h3>Acesse nossas Redes</h3>

            <i class="fa-brands fa-facebook"></i> 
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-linkedin"></i>
        </div>
    </div>
    <div class="links">
        <ul>
            <H2>ENCONTRE EVENTOS</H2>
            <li><a href="">Hoje</a></li>
            <li><a href="">Amanhã</a></li>
            <li><a href="">Está semana</a></li>
            <li><a href="">Proxima semana</a></li>
            <li><a href="">Este mês</a></li>
        </ul>
        <ul>
            <H2>CIDADES</H2>
            <li><a href="">Brumado</a></li>
            <li><a href="">Rio de Contas</a></li>
            <li><a href="">Dombasilio</a></li>
            <li><a href="">Livramento</a></li>
            <li><a href="">Salvador</a></li>
        </ul>
        <ul>
            <H2>CATEGORIAS</H2>
            <li><a href="">Sympla Play</a></li>
            <li><a href="">Festas e Shows</a></li>
            <li><a href="">Teatros e Espetaculos</a></li>
            <li><a href="">Cursos e Workshops</a></li>
            <li><a href="">Congressos e palestras</a></li>
        </ul><ul>
            <H2>PARA PRODUTORES</H2>
            <li><a href="">Soluções</a></li>
            <li><a href="">Transmissão oline</a></li>
            <li><a href="">Cursos Online</a></li>
            <li><a href="">Preços</a></li>
            <li><a href="">Integrações</a></li>
        </ul><ul>
            <H2>PLANEJE SEU EVENTO</H2>
            <li><a href="">Música e Festa</a></li>
            <li><a href="">Cursos e Workshops</a></li>
            <li><a href="">Esportivo</a></li>
            <li><a href="">Congresso e Seminario</a></li>
            <li><a href="">Gastronômico</a></li>
        </ul><ul>
            <H2>AJUDA</H2>
            <li><a href="">Central de Ajuda</a></li>
            <li><a href="">Compradores e Participantes</a></li>
            <li><a href="">Produtores de Eventos</a></li>
        </ul>
    </div>
</footer>

</body>
</html>
