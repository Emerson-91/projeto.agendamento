<?php
//sessao
session_start();
//conexao
require_once 'db_connect.php';
//clear
function clear($input){
    global $connect;
    //sql
    $var = mysqli_escape_string($connect, $input);
    //xss
    $var = htmlspecialchars($var);
    return $var;
}
if(isset($_POST['btn-cadastrar'])){
    $nome = clear($_POST['nome']);
    $login = clear($_POST['login']);
    $senha = md5(clear($_POST['senha']));
    $tipo = clear($_POST['tipo']);
    
    //INSERIR DADOS NO BANCO
    $sql = "INSERT INTO usuarios (nome, login, senha, tipo) VALUES ('$nome', '$login', '$senha', '$tipo')";

    if(mysqli_query($connect, $sql)):
        //$_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('location: ../includes/home.php');
    else:
        //$_SESSION['mensagem'] = "Erro ao cadastrar";
        header('location: ../includes/home.php'); 
    endif;    

}
?>
