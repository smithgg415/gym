<?php
require './bd/conexao.php';
require './controller/funcionarioController.php';

$controller = new FuncionarioController($pdo);
$controller->login();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <div class="mb-3">
                <label for="fun_nome" class="form-label">Nome de Usuário</label>
                <input type="text" class="form-control" id="fun_nome" name="fun_nome" required>
            </div>
            <div class="mb-3">
                <label for="fun_senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="fun_senha" name="fun_senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
