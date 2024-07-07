<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Suplemento</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            display: flex;
            
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        input{
            width:300px;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h1>Cadastrar Funcionario</h1>
        <form action="../controller/funcionarioController.php" method="POST">
            <div class="form-group">
                <label for="fun_nome">Nome:</label>
                <br>
                <input type="text" id="fun_nome" name="fun_nome" required><br>
            </div>
            <div class="form-group">
                <label for="fun_senha">Senha:</label>
                <br>
                <input type="password" id="fun_senha" name="fun_senha" required><br>
            </div>
            <input type="hidden" name="acao" value="incluir"><br>
            <button class="btn btn-primary" type="submit">Cadastrar</button>
        </form>
    </div>
</body>

</html>