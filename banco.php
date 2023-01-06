
<?php 

require 'php/conexao.php';
require 'php/verifica.php';
if(isset($_SESSION['usu']) && !empty($_SESSION['usu'])):


?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!--Custom styles-->
<link rel="stylesheet" type="text/css" href="css/estilo.css">

       

        <title>bancoWiti</title>

    </head>

    <body>

        <div class="d-flex justify-content-center h-100" id="login">

            <form class="card" action="../bancoWiti/php/login.php" method="POST">

                <div class="card-header">
                <label for="nomeUsuario"><strong><h3 style="text-transform: uppercase">
                    <?php echo $nomeUsuario;?></h3></strong> Bem vindo ao banco Witi!!
                </label> 
                    
                    
                </div>

                
                <div class="card-header">
                <label for="nomeUsuario">
                  Valor disponivel para saque: R$  <?php echo $saldoUsuario;?>
                </label> 
                    
                    
                </div>

        <div class="card-content">

                    <div class="card-content-area">
            </form>

        </div>
        <a href="../bancoWiti/php/logout.php"> 
            <div class= "btn float-right login_btn">
                 SAIR 
            </div>
        </a>
    </body>
</html>
<?php else: header("location: ../bancoWiti/index.php"); endif; ?>