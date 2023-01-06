<?php
require 'conexao.php';

if(isset($_SESSION['usu']) && !empty($_SESSION['usu'])){

    require_once 'Usuario.class.php';
    $u = new Usuario();
   
    $usuariologado = $u->logged($_SESSION['usu']);
    $nomeUsuario = $usuariologado['nome'];


   

}else{
    header("location: ../bancoWiti/index.php");
}