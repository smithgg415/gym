<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir funcionário</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        input{
            width:300px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Exclusão de Funcionário</h1>
        <?php
        require "../controller/funcionarioController.php";
        $FuncionarioController = new FuncionarioController();
        $funcionario = $FuncionarioController->buscarUm($_GET['id']);
        ?>
        <form action="../controller/funcionarioController.php" method="POST">
            <div class="form-group">
                <label for="fun_nome">Nome:</label>
                <br>
                <input type="text" id="fun_nome" name="fun_nome" disabled value="<?php echo $funcionario['fun_nome'];?>">
            </div>
            <div class="form-group">
                <label for="fun_senha">Senha:</label>
                <br>
                <input type="text" id="fun_senha" name="fun_senha" disabled value="<?php echo $funcionario['fun_senha'];?>">
            </div>
            <input type="hidden" name="fun_id" value="<?php echo $_GET['id'] ?>">
            <input type="hidden" name="acao" value="excluir">
            <button class="btn btn-primary" type="submit">Confirmar Exclusão</button>
        </form>
    </div>
</body>
</html>