<?php
require_once("templates/header.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Aluno</title>
    <link rel="short icon" href="<?= $BASE_URL ?>img/moviestar.ico" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS do projeto -->
  <link rel="stylesheet" href="css/style_Aluno.css">
  <link rel="stylesheet" href="css/novo_aluno.css">
  <link rel="stylesheet" href="css/config_Aluno.css">
</head>
<body>
    <?php

    
    require 'banco.php';

    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $nome_alunoErro = null;
        $sobrenome_alunoErro = null;
        $emailErro = null;
        $telefone = null;

        
            //$validacao = True;
            //$nonoAluno = False;
            
            if(!empty($_POST['nome_aluno'])) {
                $nome_aluno = $_POST['nome_aluno'];
            }else{
                $nome_alunoErro = 'Por favor digite o seu nome!';
                //$validacao = False;
            }

            if(!empty($_POST['sobrenome_aluno'])) {
                $sobrenome_aluno = $_POST['sobrenome_aluno'];
            }else{
                $sobrenome_alunoErro = 'Por favor digite o seu sobrenome!';
                //$validacao = False;
            }

            if(!empty($_POST['email'])) {
                $email = $_POST['email'];
            }else{
                $emailErro = 'Por favor digite o seu email!';
                //$validacao = False;
            }

            if(!empty($_POST['telefone'])) {
                $telefone = $_POST['telefone'];
            }else{
                $telefoneErro = 'Por favor digite o seu telefone!';
                //$validacao = False;
            }
        

        
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO aluno (nome_aluno, sobrenome_aluno, email, telefone) values (?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q-> execute(array($nome_aluno, $sobrenome_aluno, $email, $telefone));
            Banco::desconectar();
            header("Location: exibir_aluno.php");
    }
    
    ?>

    <section>
        <div class="fundo col-md-12">
           <div class="col-md-8">
                <h2 class="novo_aluno_titulo">Criar conta de Aluno</h2>
                <form action="novo_aluno.php" method="POST">
                    <input type="hidden" name="type">

                        <label for="nome_aluno">Nome:</label>
                        <input type="text" id="nome_aluno" name="nome_aluno" 
                        value="<?php echo !empty($nome_aluno) ? $nome_aluno : ''; ?>">
                        
                    
                        <label for="sobrenome_aluno">Sobrenome:</label>
                        <input type="text" id="sobrenome_aluno" name="sobrenome_aluno" placeholder="Digite seu sobrenome"
                        value="<?php echo !empty($sobrenome_aluno) ? $sobrenome_aluno : ''; ?>">
                    
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" placeholder="Digite seu email"
                        value="<?php echo !empty($email) ? $email : ''; ?>">
                    
                        <label for="telefone">Telefone:</label>
                        <input type="text" id="telefone" name="telefone" placeholder="Digite seu Telefone">
                        
                        <button class="bt_enviar" type="submit">Salvar</button>
                        
                </form>
                <a href="./exibir_aluno.php"><button class="bt_enviar">Listar Aluno</button></a>
            </div>
        </div>
    </section>
    
</body>
</html>

<?php
require_once("templates/footer.php");
?>