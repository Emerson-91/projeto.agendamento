<?php
//sessao
session_start();
//conexao
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = md5(mysqli_escape_string($connect, $_POST['senha']));
    $tipo = mysqli_escape_string($connect, $_POST['tipo']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    //INSERIR DADOS NO BANCO
    $sql = "UPDATE usuarios SET nome = '$nome', login ='$login', senha = '$senha',
     tipo = '$tipo' WHERE id = '$id'";

if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Atualizado com sucesso!";
    header('location: ../includes/home.php');
else:
    $_SESSION['mensagem'] = "Erro ao atualizar";
    header('location: ../includes/home.php'); 
endif;    

endif;
?>