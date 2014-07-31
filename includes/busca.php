<?php
if (isset($_POST['buscar']) && ($_POST['buscar'] != "") )
	{
		$busca 		= $_POST['buscar'];
		echo '<div class="breadcrumb"><span class="glyphicon glyphicon-search"></span> Buscando por: '.$busca.'</div>';
		

		// Não funcionou com bindValue
		$query = "Select * from paginas where titulo like '%$busca%' or conteudo like '%$busca%'";
		$stmt = $conexao->prepare($query);
        //$stmt ->bindValue("busca", "%{$busca}%");
		$stmt -> execute();
		$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//print_r($resultado);
		
		
		//Verifica o resultado;
		//if (array_key_exists($resultado)){
                if (array_key_exists('0', $resultado)){
			foreach ($resultado as $result)
			{
				echo '<a href="'.$result["titulo"].'">'.$result["titulo"].'</a><br>';
				//echo 'teste';
				
			}
		}else {
				echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign">
						</span> Desculpe nao foi encontrado nenhum resultado para sua busca!</div>';	
					//print_r($resultado);
				}
		
	}else {
		echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign"></span> Desculpe o campo de pesquisa não pode ficar em branco!</div>';
	}



