<?php

class SuplementoModel {
    private $pdo;
    public $sup_id;
    public $sup_nome;
    public $sup_descricao;
    public $sup_valor;
    public $sup_foto;
    public $sup_qtde;

    public function __construct($pdo){
        $this->pdo = $pdo;
        $this->sup_id = 0;
        $this->sup_nome = "";
        $this->sup_descricao = "";
        $this->sup_valor = "";
        $this->sup_foto = "";
        $this->sup_qtde = "";

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
    public function addSuplemento($sup_id, $sup_nome, $sup_descricao, $sup_valor, $sup_foto, $sup_qtde){
        $stmt = $this->pdo->prepare("INSERT INTO suplementos (sup_nome, sup_descricao, sup_valor, sup_foto, sup_qtde) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute ([$sup_nome, $sup_descricao, $sup_valor, $sup_foto, $sup_qtde]);
        return $this->pdo->lastInsertId();
    }

    public function updateSuplemento($sup_id, $sup_nome, $sup_descricao, $sup_valor, $sup_foto, $sup_qtde){
        $stmt = $this->pdo->prepare("UPDATE suplementos SET sup_nome = ?, sup_descricao = ?, sup_valor = ?, sup_foto = ?, sup_qtde = ? WHERE sup_id = ?");
        return $stmt->execute([$sup_nome, $sup_descricao, $sup_valor, $sup_foto, $sup_qtde]);
    }

    public function deleteSuplemento($sup_id){
        $stmt = $this->pdo->prepare("DELETE suplementos WHERE sup_id = ?");
        return $stmt->execute([$sup_id]);
    }
}