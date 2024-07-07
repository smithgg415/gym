<?php
require_once './model/suplementoModel.php';

class SuplementoController{
    private $suplemento;

    public function __construct(){
        require './bd/conexao.php';
        $this->suplemento = new SuplementoModel($pdo);
    }
    public function index(){
        $suplementos = $this->suplemento->getAllSuplementos();
        include 'suplementoView.php';
    }
    public function add(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $this->suplemento->sup_nome = $_POST["sup_nome"];
            $this->suplemento->sup_descricao = $_POST["sup_descricao"];
            $this->suplemento->sup_valor = $_POST["sup_valor"];
            $this->suplemento->sup_foto = $_POST["sup_foto"];
            $this->suplemento->sup_qtde = $_POST["sup_qtde"];

            if($this->suplemento->addSuplementos()){
                header("Location: ../view/indexSuplemento.php");
            }
            else{
                echo "erro ao adicionar o suplemento na base de dados.";
            }
        }
    }
    public function edit(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $this->suplemento->sup_id = $_POST["sup_id"];
            $this->suplemento->sup_nome = $_POST["sup_nome"];
            $this->suplemento->sup_descricao = $_POST["sup_descricao"];
            $this->suplemento->sup_valor = $_POST["sup_valor"];
            $this->suplemento->sup_foto = $_POST["sup_foto"];
            $this->suplemento->sup_qtde = $_POST["sup_qtde"];
            if($this->suplemento->updateSuplementos()){
                header("Location: ../view/indexSuplemento.php");
            }
            else{
                echo "erro em atualizar o suplemento na base de dados.";
            }
        }
    }
    public function excluir(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $this->suplemento->sup_id = $_POST["sup_id"];
            if($this->suplemento->deleteSuplementos()){
                header("Location: ../view/indexSuplemento.php");
            }
            else{
                echo "erro na exclusão do suplemento na base de dados.";
            }
        }
    }
    public function buscarUm($id){
        $suplementos = $this->suplemento->getSuplementoByid($id);
        return $suplementos;
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $controller = new SuplementoController();
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