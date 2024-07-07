<?php
class SuplementoModel {
    private $pdo;
    public $fun_id;
    public $fun_nome;
    public $fun_senha;

    public function __construct($pdo){
        $this->pdo = $pdo;
        $this->fun_id = 0;
        $this->fun_nome = "";
        $this->fun_senha = "";
    }

    public function getAllFuncionarios(){
        $stmt = $this->pdo->prepare("SELECT * FROM funcionarios");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFuncionarioById($fun_id){
        $stmt = $this->pdo->prepare("SELECT * FROM funcionarios WHERE fun_id = ?");
        $stmt->execute([$fun_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } 

    public function addFuncionario($fun_nome, $fun_senha){
        $hashed_password = password_hash($fun_senha, PASSWORD_BCRYPT);
        $stmt = $this->pdo->prepare("INSERT INTO funcionarios (fun_nome, fun_senha) VALUES (?, ?)");
        $stmt->execute([$fun_nome, $hashed_password]);
        return $this->pdo->lastInsertId();
    }

    public function updateFuncionario($fun_id, $fun_nome, $fun_senha){
        $hashed_password = password_hash($fun_senha, PASSWORD_BCRYPT);
        $stmt = $this->pdo->prepare("UPDATE funcionarios SET fun_nome = ?, fun_senha = ? WHERE fun_id = ?");
        return $stmt->execute([$fun_nome, $hashed_password, $fun_id]);
    }

    public function deleteFuncionario($fun_id){
        $stmt = $this->pdo->prepare("DELETE FROM funcionarios WHERE fun_id = ?");
        return $stmt->execute([$fun_id]);
    }

    public function getFuncionarioByNome($fun_nome){
        $stmt = $this->pdo->prepare("SELECT * FROM funcionarios WHERE fun_nome = ?");
        $stmt->execute([$fun_nome]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
