<?php
require 'banco.php';

$matricula = null;
if(!empty($_GET['matricula'])){
    $matricula = $_REQUEST['matricula'];
}

if(null == $matricula){
    header("Location: index.php");
}

if(!empty($_POST))
{

    $nome_alunoErro = null;
    $sobrenome_alunoErro = null;
    $emailErro = null;
    $telefoneErro = null;

    //$matricula = $_POST['matricula'];
    $nome_aluno = $_POST['nome_aluno'];
    $sobrenome_aluno = $_POST['sobrenome_aluno'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    //Validação
    $validacao = true;
    if (empty($nome_aluno)){
        $nome_aluno = 'Por favor digite o nome!';
        $validacao = false;
    }

    if (empty($sobrenome_aluno)){
        $sobrenome_aluno = 'Por favor digite o sobrenome!';
        $validacao = false;
    }

    if (empty($email)){
        $email = 'Por favor digite o email!';
        $validacao = false;
    }

    if (empty($telefone)){
        $telefone = 'Por favor digite o telefone!';
        $validacao = false;
    }

    //Atualizar banco
    if ($validacao){
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql =  "UPDATE aluno set nome_aluno = ?, sobrenome_aluno = ?, email = ?, telefone = ? WHERE matricula = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($nome_aluno, $sobrenome_aluno, $email, $telefone, $matricula));
        Banco::desconectar();
        header("Location: index.php");
    }
} else {
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM aluno where matricula = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($matricula));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $nome_aluno = $data['nome_aluno'];
    $sobrenome_aluno = $data['sobrenome_aluno'];
    $email = $data['email'];
    $telefone = $data['telefone'];
    Banco::desconectar();
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
    <title>Atualizar Aluno</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
  </style>
  <link rel="stylesheet" href="css/atualizar_aluno.css">
</head>
<body>
<body>
<section class="fundo">
    <div class="conteudo">
        <h3 class="atualiza_titulo">Atualizar Aluno</h3>
        
        <form class="form-horizontal" action="update.php?matricula=<?php echo $matricula ?>" method="post">

        <div class="control-group <?php echo !empty($nome_aluno) ? 'error' : ''; ?>">
            <div class="controls">
                <input name="nome_aluno" class="form-control" size="50" type="text" placeholder="Nome" value="<?php echo !empty($nome_aluno) ? $nome_aluno : ''; ?>">
                <?php if (!empty($nome_alunoErro)): ?>
                    <span class="text-danger"><?php echo $nome_alunoErro; ?></span>
                    <?php endif; ?>
                </div>
            </div>


            <div class="control-group <?php echo !empty($sobrenome_aluno) ? 'error' : ''; ?>">
            <div class="controls">
                <input name="sobrenome_aluno" class="form-control" size="50" type="text" placeholder="Sobre Nome" value="<?php echo !empty($sobrenome_aluno) ? $sobrenome_aluno : ''; ?>">
                <?php if (!empty($sobrenome_alunoErro)): ?>
                    <span class="text-danger"><?php echo $sobrenome_alunoErro; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($email) ? 'error' : ''; ?>">
            <div class="controls">
                <input name="email" class="form-control" size="50" type="text" placeholder="Email" value="<?php echo !empty($email) ? $email : ''; ?>">
                <?php if (!empty($emailErro)): ?>
                    <span class="text-danger"><?php echo $emailErro; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($telefone) ? 'error' : ''; ?>">
            <div class="controls">
                <input name="telefone" class="form-control" size="50" type="text" placeholder="Telefone" value="<?php echo !empty($telefone) ? $telefone : ''; ?>">
                <?php if (!empty($telefoneErro)): ?>
                    <span class="text-danger"><?php echo $telefoneErro; ?></span>
                    <?php endif; ?>
                </div>
            </div>
            
            
            
        
            <div class="atualiza_confirma"> Deseja atualizar o aluno?
            </div>
            <div class="form atualiza_form">
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


