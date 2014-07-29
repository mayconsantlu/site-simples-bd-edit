<?php

require_once ('includes/config.php');

// Limpando a tabela;
$conexao -> query("truncate table paginas;");

// Pagina inicial
/*$conexao -> query("insert into paginas (titulo, conteudo) values ('home', 'Conteudo da página inicial');");
$conexao -> query("insert into paginas (titulo, conteudo) values ('empresa', 'Conteudo da página Empresa');");
$conexao -> query("insert into paginas (titulo, conteudo) values ('produtos', 'Conteudo da página de Produtos');");
$conexao -> query("insert into paginas (titulo, conteudo) values ('servicos', 'Conteudo da página de Serviços');");
$conexao -> query("insert into paginas (titulo, conteudo) values ('contato', 'Conteudo da página de Contato');");
*/
 
 /* OBS - Não tentendi o por que, mas ao editar o código abaixo no Netbeans 
  * ele da a mensagem de que a varial $stmt deve ser utilizada apenas uma vez
  * e ao executar ele não funciona, mudei para o Aptana e funcionou normalmente.
  */ 
 //Criando a Página Inicial
 $sql1 = "insert into paginas (titulo, conteudo) values ('home', 'Conteudo da página inicial')";
 $stmt = $conexao->prepare($sql1);
 $stmt->execute();

 //Criando a Página Empresa
 $sql2 = "insert into paginas (titulo, conteudo) values ('empresa', 'Conteudo da página Empresa')";
 $stmt = $conexao->prepare($sql2);
 $stmt->execute();

 //Criando a Página Produtos
 $sql3 = "insert into paginas (titulo, conteudo) values ('produtos', 'Conteudo da página de Produtos')";
 $stmt = $conexao->prepare($sql3);
 $stmt->execute();

 //Criando a Página Servi�os
 $sql4 = "insert into paginas (titulo, conteudo) values ('servicos', 'Conteudo da página de Serviços')";
 $stmt = $conexao->prepare($sql4);
 $stmt->execute();

 //Criando a Página Contato
 $sql5 = "insert into paginas (titulo, conteudo) values ('contato', 'Conteudo da página de Contato')";
 $stmt = $conexao->prepare($sql5);
 $stmt->execute();
 
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

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav icon -->

        <link rel="shortcut icon" href="img/favicon.png">

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </head>

    <body>
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
            </header>
            <section>
                <div class="row clearfix">
                    <!-- menu -->
                    <div class="col-md-3 column">
						<?php
						require_once ('includes/menu.php');
 ?>
                    </div>
                    <!-- menu -->
                    <!-- corpo -->
                    <div class="col-md-9 column">
                        <!-- breadcump -->
						<?php
							$titulo = "Página de Fixtures";
							require_once ('includes/voce-esta.php');
						 ?>
                        <!-- breadcump -->
                        <div class="conteudo"> 
							<h2>Executado o arquivo de fixtures</h2>
							<a class="btn" href="/">Voltar a página inicial!</a>
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
