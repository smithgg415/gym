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
        <h1>Cadastrar Suplemento</h1>
        <form action="../controller/suplementoController.php" method="POST">
            <div class="form-group">
                <label for="sup_nome">Nome:</label>
                <br>
                <input type="text" id="sup_nome" name="sup_nome" required><br>
            </div>
            <div class="form-group">
                <label for="sup_descricao">Descrição:</label>
                <br>
                <input type="text" id="sup_descricao" name="sup_descricao" required><br>
            </div>
            <div class="form-group">
                <label for="sup_valor">Valor:</label>
                <br>
                <input type="text" id="sup_valor" name="sup_valor" placeholder="R$00,00" required><br>
            </div>
            <div class="form-group">
                <label for="sup_foto">Foto:</label>
                <br>
                <input type="file" id="sup_foto" name="sup_foto" required><br>
            </div>
            <div class="form-group">
                <label for="sup_qtde">Quantidade:</label>
                <br>
                <input type="number" id="sup_qtde" name="sup_qtde" required><br>
            </div>
            <input type="hidden" name="acao" value="incluir"><br>
            <button class="btn btn-primary" type="submit">Cadastrar</button>
        </form>
    </div>
</body>

</html>