<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['senha']);
unset($_SESSION['mensagem']);
unset($_SESSION['nome']);
$_SESSION['logado'] = 0;
header("Location: /");