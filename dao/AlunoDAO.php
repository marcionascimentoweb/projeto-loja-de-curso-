<?php

require_once("models/Aluno.php");
require_once("models/Message.php");

class AlunoDAO implements AlunoDAOInterface{

    private $conn;
    private $url;
    private $message;
    
    
    public function __construct(PDO $conn, $url ) {
      $this->conn = $conn;
      $this->url = $url;
      $this->message = new Message($url);
    }

    public function buildAluno($data) {
        $aluno = new Aluno();

        $aluno->matricula = $data["matricula"];
        $aluno->nome_aluno = $data["nome_aluno"];
        $aluno->sobrenome_aluno = $data["sobrenome_aluno"];
        $aluno->email = $data["email"];
        $aluno->senha = $data["senha"];
        $aluno->foto = $data["foto"];
        $aluno->token = $data["token"];
        $aluno->telefone = $data["telefone"];

        return $aluno;
    }

    //Criando aluno

    public function create(Aluno $aluno){
        $stmt = $this->conn->prepare("INSERT INTO aluno (
        nome_aluno, sobrenome_aluno, email, senha, foto, token, telefone)
        VALUES (
        :nome_aluno, :sobrenome_aluno, :email, :senha, :foto, :token, :telefone
        )");

        $stmt->bindParam(":nome_aluno", $aluno->nome_aluno);
        $stmt->bindParam(":sobrenome_aluno", $sobrenome_aluno);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":foto", $foto);
        $stmt->bindParam(":token", $token);
        $stmt->bindParam(":telefone", $telefone);

        $stmt->execute();

        
    }

}

 