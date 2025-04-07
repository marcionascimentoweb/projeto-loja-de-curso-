<?php
require_once("templates/header.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Márcio Nascimento Cursos TI</title>
    <link rel="short icon" href="<?= $BASE_URL ?>img/moviestar.ico" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS do projeto -->
  <link rel="stylesheet" href="css/style_Aluno2.css">
  <!-- FONTE MONTSERRAT -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
  </style>
</head>

<body>

<div class="bannerContainer">
  <div class="banner">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/banner1.jpg" class="d-block w-100" alt="Banner 1">
    </div>
    <div class="carousel-item">
      <img src="./img/banner2.jpg" class="d-block w-100" alt="Banner 2">
    </div>
    <div class="carousel-item">
      <img src="./img/banner3.jpg" class="d-block w-100" alt="Banner 3">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
<div>
   
<div class="estrutura">
 
  <aside class="sidenav">
    <ul>
      <li class="categoria programacao">
        <img src="./img/code.svg" alt="programação">
      </li>
      <li class="categoria banco">
      <img src="./img/database.svg" alt="banco">
      </li>
      <li class="categoria cloud">
      <img src="./img/cloud.svg" alt="clound">
    </li>
      <li class="categoria IA">IA</li>
    </ul>
  </aside>
 
  <main class="conteudo">
    
    <article class="lancamento">

      <section class="lancamento1">
        <div class="img_prog">
          <img src="./img/img_lancamento.jpg" alt="lancamento">
          <h5 class="subTitulo_lancamento">PROGRAMAÇÃO</h5>
          <button class="bt_escolher bt_lancamento1">ESCOLHER</button>
        </div>
        <div class="front">
            <h5>Front-End</h5>
            <p>Angular</p>
            <p>React</p>
            <p>Vue</p>
        </div>
        <div class="back">
          <h5>Back-end</h5>
          <p>Java</h5>
          <p>Node JS</p>
          <p>PHP</p>
        </div>
      </section>
      
      <section class="lancamento2">
        <div class="card_lancamento2">
          <h5>Dados</h5>
          <p>MySQL</p>
          <p>Oracle</p>
          <p>MongoDB</p>
          <button class="bt_escolher bt_lancamento2">ESCOLHER</button>
        </div>
      </section>
      
      <section class="lancamento3">
        <div class="card_lancamento3">
          <h5>Gestão e Tester</h5>
          <p>Análise de Requisitos</p>
          <p>Automação de Testes</p>
          <p>JMeter</p>
          <button class="bt_escolher bt_lancamento3">ESCOLHER</button>
        </div>
      </section>

      <section class="lancamento4">
        <div class="card_lancamento4">
          <h5>Escritório</h5>
          <p>Windows</p>
          <p>Excell</p>
          <p>Word</p>
          <button class="bt_escolher bt_lancamento4">ESCOLHER</button>
        </div>
      </section>
    </article>
    
    <article class="cards">
      
      <section class="card1 card">
        <img src="./img/cards1.png" alt="card">
        <h3 class="titulo">PHP 7 e MySQL</h3>
        <h4 class="subtitulo">Do básico ao Avançado</h4>
        <p class="horas">40 Horas</p>
        <h5 class="valor">R$ 99,00</h5>
      </section>

      <section class="card2 card">
      <img src="./img/cards2.png" alt="card">
        <h3 class="titulo"> JAVA PARA INICIANTES</h3>
        <h4 class="subtitulo">Com projetos reais</h4>
        <p class="horas">85 Horas</p>
        <h5 class="valor">R$ 129,00</h5>
      </section>

      <section class="card3 card">
      <img src="./img/cards3.png" alt="card">
        <h3 class="titulo">EXCEL AVANÇADO</h3>
        <h4 class="subtitulo">Faça Planilhas Complexas</h4>
        <p class="horas">30 Horas</p>
        <h5 class="valor">R$ 59,00</h5>
      </section>
 
    </article>

  </main>
</div>
</body>
</html>

<?php
require_once("templates/footer.php");
?>