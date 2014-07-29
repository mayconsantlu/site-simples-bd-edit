<?php 
	if (isset($_POST['nome']) && ($_POST['nome'] != "") )
	{
		$nome 		= $_POST['nome'];
		$email 		= $_POST['email'];
		$assunto 	= $_POST['assunto'];
		$mensagem	= $_POST['mensagem'];
		?>
         <div>
           	<h4 class="alert alert-success" role="alert">Dados enviados com sucesso,<small> abaixo seguem os dados que voc&ecirc; enviou.</small></h4>
           	<p class="well"><b>Nome: </b> <?=$nome; ?> <br />
           	<b>e-mail: </b> <?=$email; ?> <br />
           	<b>Assunto: </b> <?=$assunto; ?> <br />
           	<b>Mensagem: </b> <?=$mensagem; ?> <br />
         </div>
        <?php 
        }
        else {
        	//echo 'teste';
        }
?>


    <h3 class="text-info">
        Entre em contato conosco por telefone, e-mail ou pelo form&uacute;l&aacute;rio abaixo:
        
    </h3> <address> <strong>Site House.</strong><br /> Rua Jos&eacute; Alceu Sabatke, 120, Bloco H AP 41<br /> Curitiba / PR<br /> <abbr title="Fone">Fones:</abbr> 41 9942-0273 / 41 3379-8696</address>

    <form class="form-horizontal" method="post" action="">
    <fieldset>

        <!-- nome do form -->
        <legend>Formul&aacute;rio de contato</legend>

        <div class="form-group">
            <label class="col-md-4 control-label" for="nome">Nome</label>
            <div class="col-md-6">
                <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="email">e-mail</label>
            <div class="col-md-6">
                <input id="email" name="email" type="email" placeholder="e-mail" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="assunto">Assunto</label>
            <div class="col-md-6">
                <input id="assunto" name="assunto" type="text" placeholder="Assunto" class="form-control input-md" required="">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="mensagem">Mensagem</label>
            <div class="col-md-4">
                <textarea class="form-control" id="mensagem" name="mensagem"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="enviar"></label>
            <div class="col-md-8">
                <button id="enviar" type="submit" name="enviar" class="btn btn-success">Enviar</button>
                <button id="limpar" type="reset" name="limpar" class="btn btn-danger">Limpar</button>
            </div>
        </div>

    </fieldset>
</form>
<div class="clear"></div>