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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS do projeto -->
  <link rel="stylesheet" href="css/style_Aluno.css">
  <link rel="stylesheet" href="css/config_Aluno.css">
  <link rel="stylesheet" href="css/exibir_aluno.css">
  
  <!-- FONTE MONTSERRAT -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
  </style>
</head>
<body>
  <section class="fundo">

    <div class="estrutura">

      <main class="conteudo">
        <h3>Lista de Alunos</h3>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>MATRICULA</th>
                <th>NOME</th>
                <th>SOBRENOME</th>
                <th>EMAIL</th>
                <th>TELEFONE</th>
                <th>EXCLUIR</th>
                <th>ATUALIZAR</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'banco.php';
              $pdo = Banco::conectar();
              $sql = 'SELECT * FROM aluno ORDER BY matricula DESC';

              foreach($pdo->query($sql)as $row)
              {
                  echo '<tr>';
                  echo '<th scope="row">'. $row['matricula'] . '</th>';
                  echo '<td>'. $row['nome_aluno'] . '</td>';
                  echo '<td>'. $row['sobrenome_aluno'] . '</td>';
                  echo '<td>'. $row['email'] . '</td>';
                  echo '<td>'. $row['telefone'] . '</td>';
                  echo '<td>' . '<a class="btn btn-danger" href="delete.php?matricula='.$row['matricula'].'">Excluir</a>';
                  echo '<td>' . '<a class="btn btn-warning" href="update.php?matricula='.$row['matricula'].'">Atualizar</a>';
                  
                  echo '</td>';
                  echo '</tr>';
              }
              ?>
              </tbody>
            </table>
            <a href="novo_aluno.php"><button class="bt_exibir bt_enviar">Novo Aluno</button></a>
      </main>
    </div>
  </section>
</body>
</html>
<?php
require_once("templates/footer.php");
?>



