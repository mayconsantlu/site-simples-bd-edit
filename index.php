<?php
$url = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
$getUrl = trim($url['path'], '/');
//echo $getUrl. "<br/>";
// --------
date_default_timezone_set('America/Sao_Paulo');
require_once ('includes/config.php');
// --------
// Consulta
if ($getUrl != "") {
	$rota = $getUrl;
} else {
	$rota = 'home';
}
//echo $rota. "<br/>";
// seleciona as paginas com base na url passada
$query = "Select * from paginas where titulo = :rota";
//$stmt = $conexao->query($query);
$stmt = $conexao -> prepare($query);
$stmt -> bindValue("rota", $rota);
$stmt -> execute();
$resultado = $stmt -> fetch(PDO::FETCH_ASSOC);
//print_r($resultado);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>Site Simples - Code-Education!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Simples - Code-education">
        <meta name="author" content="Maycon Luczynski">

        <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
        <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
        <!--script src="js/less-1.3.3.min.js"></script-->
        <!--append â€˜#!watchâ€™ to the browser URL, then refresh the page. -->

        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav icon -->

        <link rel="shortcut icon" href="img/favicon.png">

        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/scripts.js"></script>
    </head>

    <body>
        <!-- titulo e url -->
        <?php
		// pega os dados pelo get e verifica se não está em branco
		if (isset($getUrl) != "") {
			$pag = $getUrl;
		} else {
			$pag = "";
		}
		// ajusta os titulos e paginas e verifica se existe
		if (($pag == 'home') or ($pag == "")) {
			$titulo = $rotas["home"];
			$conteudo = $resultado['conteudo'];
		} elseif ($pag == 'empresa') {
			$titulo = $rotas["empresa"];
			$conteudo = $resultado['conteudo'];
		} elseif ($pag == 'produtos') {
			$titulo = $rotas["produtos"];
			$conteudo = $resultado['conteudo'];
		} elseif ($pag == 'servicos') {
			$titulo = $rotas["servicos"];
			$conteudo = $resultado['conteudo'];
		} elseif ($pag == 'contato') {
			$titulo = $rotas["contato"];
			$conteudo = $resultado['conteudo'];
			//$conteudo = 'includes/contato.php';
		} elseif ($pag == 'busca') {
			$titulo = $rotas["busca"];
		} else {
			$titulo = $rotas["404"];
			$pag = '404';
			http_response_code(404);
		}
        ?>
        <!-- titulo e url -->

       <div class="container">
            <header>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="page-header">
                            <h2>
                                SITE SIMPLES | PHP <small>code-education</small>
                            </h2>
                         </div>
                     </div>
                 </div>
          <!--/div-->
            </header>
            <section>
                <div class="row clearfix">
                    
                    <div class="col-md-3 column">
                   <!-- busca -->
                   <div class="busca">
					<form class="form" role="search" action="busca" method="post">
						<div class="col-md-10">
							<input type="search" id="buscar" name="buscar" class="form-control" placeholder="Pesquisar..." />
						</div>
						<button type="submit" class="btn btn-info btn-small"><span class="glyphicon glyphicon-search"></span></button>
					</form>
					</div>	
				<!-- busca -->
				<div class="clear"></div>
				<!-- menu -->
				<div id="menu">
					<?php require_once ('includes/menu.php'); ?>
                </div>    
                    </div>
                    <!-- menu -->
                    <!-- corpo -->
                    <div class="col-md-9 column">
                   <!-- breadcump -->
					<?php require_once ('includes/voce-esta.php'); ?>
                   <!-- breadcump -->
                        <div class="conteudo"> 
                        <?php
						if ($pag == 'contato') {
							echo($conteudo);
							require_once ('includes/contato.php');
						} elseif ($pag == '404') {
							require_once ('includes/404.php');
						}elseif ($pag == 'busca') {
							require_once ('includes/busca.php');
							//echo 'Teste ok';
						} else {
							echo($conteudo);
						}
                        ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="clear"></div>
        <footer>
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <p class="text-center">Todos os direitos reservados <?= date("Y"); ?></p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </body>
</html>
