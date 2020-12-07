<?php
require_once'php_actions/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <link rel="stylesheet" href="recursos/css/login.css">
     <link rel= "icon" href = "recursos/img/projetor.png" type= "image/x-icon"> 
    <title>Login</title>
</head>
<body>

    <div class="login-form">
   
        <div class="main-div">
        <img src="/recursos/img/projetor-login.png">
        <h3>Agendamento de Equipamentos</h3>
            <div class="panel">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" class="login"  method="POST">

                        <input type="text" placeholder="Login" class="form-control" name="login"><br>
                        <input type="password" placeholder="senha" class="form-control" name="senha"><br>
                        <button type="submit"  class="btn btn-primary" name="btn-entrar">Entrar</button>

                </form>
                <br>
                <div class="alert alert-danger" role="alert">
                    <?php
                    if(!empty($erros)){
                        foreach($erros as $erro){
                            echo"$erro";
                        }
                    }
                    ?>
                </div>
            </div>
        <p class="botto-text"> Desenvolvido por Emerson Henrique</p>
        </div>
    </div>
   
</html>
