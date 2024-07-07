<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Suplementos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <?php foreach ($funcionarios as $funcionario): ?>
            <table class="table">
                <tr>
                    <th>Código:</th>
                    <th>Nome:</th>
                    <th>Senha:</th>
                </th>
                <tr>
                    <td><?php echo $funcionario["fun_id"];?></td>
                    <td><?php echo $funcionario["fun_nome"];?></td>
                    <td>Não mostrada</td>
                    <td><a href="funcionarioUpdate.php?id=<?php echo $funcionario["fun_id"]?>" role="button" class="btn btn-warning">Editar</a></td>
                    <td><a href="funcionarioUpdate.php?id=<?php echo $funcionario["fun_id"]?>" role="button" class="btn btn-danger">Excluir</a></td>
                </tr>
            </table>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<?php 
function excluir($id){
    echo $id;
}
?>
</html>
