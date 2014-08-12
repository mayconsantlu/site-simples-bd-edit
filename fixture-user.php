<?php

require_once ('includes/config.php');

// verifica se a tabela existe e cria se não existir
$conexao -> query("create table if not exists usuario
                    (   id integer unsigned auto_increment not null,
                        nome varchar(150) not null,
                        usuario varchar(150) not null,
                        senha varchar(150) not null,
                        primary key (id));");

// Limpando a tabela;
$conexao -> query("truncate table usuario;");

// cria usuario
$nome = "Usuario Administrativo";
$user = 'admin';
$senha = 'senha';
$pass = password_hash( $senha, PASSWORD_DEFAULT );

//Criando a Página Inicial
$sql1 = "insert into usuario (nome, usuario, senha) values ('$nome', '$user', '$pass')";
$stmt = $conexao->prepare($sql1);
$stmt->execute();
