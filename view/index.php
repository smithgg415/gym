<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque de Suplementos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/styleIndex.css">
</head>
<body>
    <div class="overlay">
        <h2>Academia Espaço Fitness</h2>
        <h2>Controle de Estoque de Suplementos</h2>
        <div class="date">
            <p class="dateHour">Data: <span id="date"></span> Hora: <span id="time"></span></p>
        </div>
        <p>Gerencie o cadastro e o estoque dos seus suplementos de forma eficiente e prática.</p>
        <div class="d-flex justify-content-center">
            <a href="suplementoAdd.php" class="btn-custom">
                <i class="bi bi-plus-circle"></i> Cadastrar Suplementos
            </a>
            <a href="indexSuplemento.php" class="btn-custom">
                <i class="bi bi-box-seam"></i> Controle de Estoque
            </a>
        </div>
    </div>
    <div class="container mt-5">
        
        <div class="section">
            <h3>Desenvolvedor</h3>
            <p><i class="bi bi-envelope"> </i>lfgiacomellirodrigues@gmail.com</p>
            <p><i class="bi bi-whatsapp"> </i>(18) 98197-1147</p>
        </div>
        <div class="footer"></div>


        
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            function displayDateTime(){
                const now = new Date();
                const date = now.toLocaleDateString();
                const time = now.toLocaleTimeString();
                document.getElementById("date").textContent = date;
                document.getElementById("time").textContent = time;
            }
            setInterval(displayDateTime, 1000);
            displayDateTime();
        });
    </script>
</body>
</html>