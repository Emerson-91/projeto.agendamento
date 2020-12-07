<?php
//sessao
session_start();
//conexao
require_once 'db_connect.php';
if(isset($_POST['btn-deletar'])){
    $id = mysqli_escape_string($connect, $_POST['id']);

    //INSERIR DADOS NO BANCO
    $sql = "DELETE FROM usuarios WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('location: ../includes/home.php');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar";
        header('location: ../includes/home.php'); 
    endif;    

}else{
    echo "<h1> NAO APAGOU </H2>"; 
}
?>