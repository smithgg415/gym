<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Suplemento</title>
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
        <h1>Editar Suplemento</h1>
        <?php
        require "../controller/suplementoController.php";
        $suplementoController = new SuplementoController();
        $suplemento = $suplementoController->buscarUm($_GET['id']);
        ?>
        <form action="../controller/suplementoController.php" method="POST">
            <div class="form-group">
                <label for="sup_nome">Nome:</label>
                <br>
                <input type="text" id="sup_nome" name="sup_nome" required value="<?php echo $suplemento['sup_nome'];?>">
            </div>
            <div class="form-group">
                <label for="sup_descricao">Descrição:</label>
                <br>
                <input type="text" id="sup_descricao" name="sup_descricao" required value="<?php echo $suplemento['sup_descricao'];?>">
            </div>
            <div class="form-group">
                <label for="sup_valor">valor:</label>
                <br>
                <input type="text" id="sup_valor" name="sup_valor" required value="<?php echo $suplemento['sup_valor']; ?>"><br>
            </div>
            <div class="form-group">
                <label for="sup_foto">Foto:</label>
                <br>
                <input type="file" id="sup_foto" name="sup_foto" required value="<?php echo $suplemento['sup_foto']; ?>"><br>
            </div>
            <div class="form-group">
                <label for="sup_qtde">Quantidade:</label>
                <br>
                <input type="number" id="sup_qtde" name="sup_qtde" required value="<?php echo $suplemento['sup_qtde']; ?>"><br>
            </div>
            <input type="hidden" name="sup_id" value="<?php echo $_GET['id'] ?>">
            <input type="hidden" name="acao" value="editar">
            <button class="btn btn-primary" type="submit">Atualizar</button>
        </form>
    </div>
</body>

</html>