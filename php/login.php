<?php
require 'conexao.php';
require 'Usuario.class.php';


$u = new Usuario();



if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($u->login($email,$senha) == true){
        if(isset($_SESSION['usu'])){
            header("location: ../banco.php");
            
        }else{
            
            header("location: ../index.php");
        }

    }else{
        $_SESSION['msg'] = "Login ou senha invalidos";
        header("location: ../index.php");
        exit;
    }
    

}

?>