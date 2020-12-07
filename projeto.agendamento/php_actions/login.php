<?php
//conexao
require_once 'db_connect.php';

//sessao
session_start();

//Botao enviar
if(isset($_POST['btn-entrar'])){
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
}
//verificar se os campos de login e senha estao vazios
if(empty($login) or empty($senha)){
    $erros[] = "<li>O campo login/senha precisa ser preenchido </li>";
}else{//CONSULTANDO NO BANCO SE O LOGIN ESTA IGUAL
    $sql = "SELECT login FROM usuarios WHERE login = '$login'";
    $resultado = mysqli_query($connect, $sql);

    if(mysqli_num_rows($resultado)> 0){ // CONSULTANDO NO BANCO SE EXISTE UM LOGIN E UMA SENHA IGUAL AO PASSADO PELO FORMULARIO
        //criptografando senha para bater com o bd
        $senha = md5($senha);

        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) == 1){
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($connect);
            $_SESSION['logado'] = true;
            $_SESSION['id_usuario'] = $dados['id'];
            header('location:./includes/home.php');
        }else{
            $erros[] = "<li> Usuario e senha não conferem </li>";
        }
    }else{
        $erros[] = "<li> Usuario inexistente </li>";
    }
}

?>