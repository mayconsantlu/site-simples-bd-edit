<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>Aulas PDO</title>
    </head>
    <body>
        <?php
        try {
	$conexao = new \PDO("mysql:host=mysql.hostinger.com.br;dbname=u802129138_aulas", "u802129138_aulas", "santlu");
	#$query = "Insert into clientes (nome, email) values ('Jackeline', 'jackesantlu@gmail.com')";# insert normal do SLQ
	$query = "Select * from clientes";
	
	#$resultado = $conexão->exec($query); //exec rodar varios comandos de criação ou inserção
 	$stmt = $conexao->query($query);
        $resultado = $stmt->fetchAll();
        #print_r($resultado);
        echo $resultado[0]['id']." ";
        echo $resultado[0]['nome']."<br/>";
        echo $resultado[1]['id']." ";
        echo $resultado[1]['nome']."<br/>";
	} 
		catch(\PDOException $e) {
		echo "Não foi possível estabelecer a conexão com o Bando de dados" .$e->getMessage().": ".$e->getCode();
		}
        ?>
    </body>
</html>
