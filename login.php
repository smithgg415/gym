<?php
require './bd/conexao.php';
require './controller/funcionarioController.php';

$controller = new FuncionarioController($pdo);
$controller->login();
?>
