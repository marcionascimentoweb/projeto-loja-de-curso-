<?php

Class Aluno{

    private $pdo;

    //conexão com o banco de dados
    public function __construct($dbname, $host, $user, $senha)
    {
        try{
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $senha);
            
        }
        catch(PDOException $e)
        {
            echo "Erro com banco de dados: ".$e->getMessage();
            exit();
        }
        catch(Exception $e)
        {
            echo "Erro genérico: ".$e->getMessage();
            exit();
        }
    }

    //Listar Aluno

        public function listarAlunos()
        {
            $res = array();
            $cmd = $this->pdo->query("SELECT * FROM aluno");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);// Obtém todos os resultados como um array associativo
            return $res; // Retorna o array contendo os resultados
        }
 

}
      
