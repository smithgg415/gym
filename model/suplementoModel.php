<?php

class SuplementoModel {
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function getAllSuplementos(){
        $stmt = $this->pdo->prepare("SELECT * FROM suplementos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSuplementoById($sup_id){
        $stmt = $this->pdo->prepare("SELECT * FROM suplementos WHERE sup_id = ?");
        $stmt->execute([$sup_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } 
    public function addSuplemento($sup_id, $sup_nome, $sup_descricao, $sup_valor, $sup_foto){
        $stmt = $this->pdo->prepare("INSERT INTO suplementos (sup_nome, sup_descricao, sup_valor, sup_foto) VALUES (?, ?, ?, ?)");
        $stmt->execute ([$sup_nome, $sup_descricao, $sup_valor, $sup_foto]);
        return $this->pdo->lastInsertId();
    }

    public function updateSuplemento($sup_id, $sup_nome, $sup_descricao, $sup_valor, $sup_foto){
        $stmt = $this->pdo->prepare("UPDATE suplementos SET sup_nome = ?, sup_descricao = ?, sup_valor = ?, sup_foto = ? WHERE sup_id = ?");
        return $stmt->execute([$sup_nome, $sup_descricao, $sup_valor, $sup_foto]);
    }

    public function deleteSuplemento($sup_id){
        $stmt = $this->pdo->prepare("DELETE suplementos WHERE sup_id = ?");
        return $stmt->execute([$sup_id]);
    }
}