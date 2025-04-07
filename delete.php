<?php
require 'banco.php';

$matricula = 0;

if(!empty($_GET['matricula']))
{
    $matricula = $_REQUEST['matricula'];
}

if(!empty($_POST))
{
    $matricula = $_POST['matricula'];

    //Delete do banco
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql =  "DELETE FROM aluno where matricula = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($matricula));
    Banco::desconectar();
    header("Location: index.php");
}

?>

<?php
require_once("templates/header.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Aluno</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
  </style>
  <link rel="stylesheet" href="css/delete_aluno.css">
</head>
<body>
<body>
<section class="fundo">
    <div class="conteudo">
        <h3 class="delete_titulo">Excluir Contato</h3>
        <form class="form-horizontal" action="delete.php" method="post">
            <input type="hidden" name="matricula" value="<?php echo $matricula;?>" />
            <div class="delete_confirma"> Deseja excluir o contato?
            </div>
            <div class="form delete_form">
                <button type="submit" class="bt_enviar">Sim</button>
                <button a href="index.php" type="btn" class="bt_nao_enviar">Não</a></button>
            </div>
        </form>
    </div>
</section>
  
</body>
</html>

<?php
require_once("templates/footer.php");
?>

