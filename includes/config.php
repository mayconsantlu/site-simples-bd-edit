<?php
/*
* Arquivo de Configuracao
*/
// Banco de dados
$host = 'localhost';
$db = 'code';
$user = 'root';
$pass = 'root';
try {
	$conexao = new \PDO("mysql:host=$host; dbname=$db", "$user", "$pass");
	#$resultado = $conexao->exec($query); //exec rodar varios comandos de criação ou inserção
 	} 
	catch(\PDOException $e) {
            echo "Nao foi poss�vel estabelecer a conexao com o Bando de Dados<br/>" .$e->getMessage().": ".$e->getCode();
	}

// Rotas
$rotas = array(
	"home" => "Seja bem vindo ao nosso site!",
	"empresa" => "Empresa",
	"produtos" => "Produtos",
	"servicos" => "Serviços",
	"contato" => "Contato",
	"busca" => "Resultado da busca",
	"404" => "404 - P&aacute;gina não encontada!"
);
