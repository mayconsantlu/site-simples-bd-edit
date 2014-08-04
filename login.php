<?php
session_start();
include_once 'config.php';

if(isset($_SESSION['logado']))
{
    header("Location: /");
    $_SESSION['mensagem'] = 'Você deve efetuar login - Clique em login no topo da página e insira seu usuário e senha';
    exit;
} elseif (isset($_POST['usuario']) && $_POST['usuaro'] != "") {
    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    //seleciona o usuario
    $query = "Select * from usuario where usuario = :usuario and senha = :senha";
        $stmt = $conexao -> prepare($query);
        $stmt -> bindValue("usuario", $usuario);
        $stmt -> bindValue("senha", $senha);
        $stmt -> execute();
        $result = $stmt -> fetch(PDO::FETCH_ASSOC);
        print_r($result);



}else {
    header("Location: /");
    $_SESSION['mensagem'] = 'Os campos não podem ficar em branco- Clique em login no topo da página e insira seu usuário e senha';
    exit;
}