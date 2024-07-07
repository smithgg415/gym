<?php
require_once 'config.php';

try {
    $pdo = newPDO("mysql:host=" . HOST . ':' . PORT . ";dbname=" . DBNAME . ";charset=" . CHARSET . "", USER, PASSWORD);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}