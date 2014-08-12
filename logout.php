<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['senha']);
unset($_SESSION['mensagem']);
$_SESSION['logado'] = 0;
header("Location: /");