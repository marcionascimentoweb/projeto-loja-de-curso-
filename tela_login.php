<?php
require_once("templates/header.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Márcio Nascimento Cursos TI</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" />
  <!-- CSS do projeto -->
  <link rel="stylesheet" href="css/header_.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/config_Aluno.css">
</head>
<body>
    <section class="fundo">
      <div class="login_container">
        <div class="login_esquerdo">
          <p class="login_slogan">Seja bem vindo. <br> Entre e estude <br>com o <span>MELHOR</span> <br>curso on line.</p>
          <img class="login_img" src="./img/login_img.jpg" alt="imagem login">
        </div>
        <div class="login_direito">
          <div class="form_fundo">
            <div class="form_logotipo">
              <img class="form_logo" src="./img/logotipo.svg" alt="logotipo">
            </div>
            <h2 class="form_login">LOGIN</h2>
            <form class="form_dados">
              <label for="email">Email:</label><br>
              <input type="email" name="email" id="email" placeholder="Digite seu email"></input><br>
              <label for="senha">Senha:</label><br>
              <input type="password" name="senha" id="senha" placeholder="Digite a sua senha"></input><br>
              <link rel="stylesheet" href=""> <p class="form_recuperar">Recuperar a sua senha!</p> </link>
            </form>
              <a href="./autenticacao_Aluno.php"><button class="bt bt_form_entrar">Entrar</button>
              <a href="./novo_aluno.php"><button class="bt bt_form_cadastrar">Cadastrar</button></a>
          </div>
        </div>
      </div>
    </section>
</body>
</html>

<?php
require_once("templates/footer.php");
?>