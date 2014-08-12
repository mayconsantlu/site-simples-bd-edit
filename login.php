<?php
session_start();
include_once 'includes/config.php';

//echo($_SESSION['user'].'<br>');
//echo $senha.'<br>';
//echo($_SESSION['pass']);
 if ($_POST['usuario'] != "" && $_POST['senha'] != "") {
     $usuario = $_POST['usuario'];
     $senha = $_POST['senha'];
     echo $usuario.' - '.$senha.' <br /> ';
     $query = ('select * from usuario where usuario = :usuario;');
     $stmt = $conexao->prepare( $query );
     $stmt->bindValue('usuario', $usuario);
     //$stmt->bindValue("senha", $senha);
     $stmt->execute();
     $result = $stmt -> fetch(PDO::FETCH_ASSOC);
     $hash = $result['senha'];
     print_r($result);
     if (password_verify($senha, $hash)) {
         //echo 'A Senha é valida';
         $_SESSION['logado']=1;
         $_SESSION['mensagem'] = 'Você esta logago como administrador!';
         $_SESSION['classe'] = 'alert-success';
         header("Location: /");
     } else {
         unset($_SESSION['usuario']);
         unset($_SESSION['senha']);
         $_SESSION['mensagem'] = 'Usuario ou senha incorretos, verifique os dados e tente novamente!';
         $_SESSION['classe'] = 'alert-danger';
         $_SESSION['logado'] = 0;
         header("Location: /");
     }

        /*if ($result){
            $_SESSION['logado']=1;
            $_SESSION['mensagem'] = 'Você esta logago como administrador!';
            $_SESSION['classe'] = 'alert-success';
            header("Location: /");
        }*/
     exit;
 }else {
     $_SESSION['logado']=0;
     $_SESSION['classe'] = 'alert-danger';
     $_SESSION['mensagem'] = 'Os campos não podem ficar em branco - Clique em login no topo da página e insira seu usuário e senha';
     header("Location: /");
 }

/*if(isset($_SESSION['logado']) && ($_SESSION['logado'] == 1) )
{
    $_SESSION['user'] = $usuario;
    $_SESSION['pass'] = password_hash($senha, PASSWORD_DEFAULT);
    header("Location: /");
   $_SESSION['mensagem'] = 'Você já entrou antes';
    //exit
} else {
    if (isset($_POST['usuario']) && $_POST['usuaro'] != "") {
        $usuario = $_POST['usuario'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        //seleciona o usuario
        echo $usuario.'<br>';
        echo($senha);

        $query = "Select * from usuario where usuario = :usuario and senha = :senha";
        $stmt = $conexao -> prepare($query);
        $stmt -> bindValue("usuario", $usuario);
        $stmt -> bindValue("senha", $senha);
        $stmt -> execute();
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);
        print_r($result);
        $_SESSION[logado] = 1;
        unset($_SESSION['mensagem']);

    }else {
        header("Location: /");
        $_SESSION['mensagem'] = 'Os campos não podem ficar em branco - Clique em login no topo da página e insira seu usuário e senha - fim';
        //exit;
    }
}
*/