<?php
session_start();

if (isset($_POST['conteudo']) && $_POST['conteudo'] != ""){
    $id = $_SESSION['id'];
    $titulo = $_SESSION['titulo'];
    $conteudo = $_POST['conteudo'];
    $update = "update paginas set conteudo = '$conteudo' where id = 1;";
   // $update = "update paginas set conteudo = '$conteudo' where id = :id";
    $stmt = $conexao->prepare($update);
    $stmt -> bindValue('id', $id);
    $stmt->execute();

    if ($update){
        $_SESSION['mensagem'] = 'Atualização efetuada com sucesso!';
        $_SESSION['classe'] = 'alert-success';
        //header("Location: /'.$titulo.' ");
    }
    else {
        $_SESSION['mensagem'] = 'OOps, não deu certo, Tente novamente!';
        $_SESSION['classe'] = 'alert-danger';
       // header("Location: /'.$titulo.' ");
    }

}else {
    $_SESSION['mensagem'] = 'OOps, não é possível acessar diretamente!';
    $_SESSION['classe'] = 'alert-danger';
    //header("Location: /'.$titulo.' ");
}