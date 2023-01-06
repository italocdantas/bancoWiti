<?php
require 'conexao.php';


unset($_SESSION['usu']);
var_dump($_SESSION['usu']);

header("location: ../index.php");