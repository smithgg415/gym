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
        include './view/suplementoView.php';
    }
}