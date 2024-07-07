<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Suplementos</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }
        .card img {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <?php foreach ($suplementos as $suplemento): ?>
                <div class="col-md-4">
                    <div class="card">
                        <p> <?php echo $suplementos["sup_id"]; ?></p>
                        <img src="<?php echo $suplemento["sup_foto"]; ?>" class="card-img-top" alt="<?php echo $suplemento["sup_nome"]; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $suplemento["sup_nome"]; ?></h5>
                            <p class="card-text"><?php echo $suplemento["sup_descricao"]; ?></p>
                            <p class="card-text">Valor: R$ <?php echo number_format($suplemento["sup_valor"], 2, ',', '.'); ?></p>
                            <p class="card-text">Quantidade no estoque: <?php echo $suplemento["sup_qtde"]; ?></p>
                        </div>
                    </div>
                </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Link para o JS do Bootstrap (opcional, dependendo dos componentes usados) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
