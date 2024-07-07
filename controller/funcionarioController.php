<?php
require_once './model/funcionarioModel.php';

class FuncionarioController{
    private $funcionario;

    public function __construct(){
        require './bd/conexao.php';
        $this->funcionarios = new FuncionarioModel($pdo);
    }
    public function index(){
        $funcionarios = $this->funcionario->getAllFuncionario();
        include 'funcionarioView.php';
    }
    public function add(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $this->funcionario->fun_nome = $_POST["fun_nome"];
            $this->funcionario->fun_senha = $_POST["fun_senha"];

            if($this->funcionario->addFuncionarios()){
                header("Location: ../view/indexFuncionario.php");
            }
            else{
                echo "erro ao adicionar o funcionario na base de dados.";
            }
        }
    }
    public function edit(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $this->funcionario->fun_id = $_POST["fun_id"];
            $this->funcionario->fun_nome = $_POST["fun_nome"];
            $this->funcionario->fun_senha = $_POST["fun_senha"];
            if($this->funcionario->updateFuncionarios()){
                header("Location: ../view/indexFuncionario.php");
            }
            else{
                echo "erro em atualizar o funcionario na base de dados.";
            }
        }
    }
    public function excluir(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $this->funcionario->fun_id = $_POST["fun_id"];
            if($this->funcionario->deleteFuncionarios()){
                header("Location: ../view/indexFuncionario.php");
            }
            else{
                echo "erro na exclusão do funcionario na base de dados.";
            }
        }
    }
    public function buscarUm($id){
        $funcionarios = $this->funcionario->getFuncionarioByid($id);
        return $funcionarios;
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $controller = new FuncionarioController();
    if($_POST["acao"] == "incluir"){
        $controller->add();
    }
    else{
        if($_POST["acao"] == "editar"){
            $controller->edit();
        }
        else{
            if($_POST["acao"] == "excluir"){
                $controller->excluir();
            }
        }
    }
}