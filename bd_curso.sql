create database mncurso;

use mncurso;

CREATE TABLE aluno(
matricula INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome_aluno VARCHAR(100),
sobrenome_aluno VARCHAR(100),
email VARCHAR(200),
senha VARCHAR(200),
foto VARCHAR(200),
token VARCHAR(200),
Telefone VARCHAR(30)
);



