<?php

class Aluno {
    public $matricula;
    public $nome_aluno;
    public $sobrenome_aluno;
    public $email;
    public $senha;
    public $foto;
    public $token;
    public $telefone;
}

interface AlunoDAOInterface{

    public function create(Aluno $aluno);

}



