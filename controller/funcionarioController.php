<?php
class FuncionarioController {
    private $funcionarioModel;

    public function __construct($pdo){
        $this->funcionarioModel = new SuplementoModel($pdo);
    }

    public function register(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $fun_nome = $_POST["fun_nome"];
            $fun_senha = $_POST["fun_senha"];
            if($this->funcionarioModel->addFuncionario($fun_nome, $fun_senha)){
                header("Location: login.php");
            } else {
                echo "Erro ao criar a conta.";
            }
        }
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $fun_nome = $_POST["fun_nome"];
            $fun_senha = $_POST["fun_senha"];
            $funcionario = $this->funcionarioModel->getFuncionarioByNome($fun_nome);
            if($funcionario && password_verify($fun_senha, $funcionario['fun_senha'])){
                session_start();
                $_SESSION['fun_id'] = $funcionario['fun_id'];
                $_SESSION['fun_nome'] = $funcionario['fun_nome'];
                header("Location: index.php");
            } else {
                echo "Nome de usuário ou senha incorretos.";
            }
        }
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        header("Location: login.php");
    }
}
