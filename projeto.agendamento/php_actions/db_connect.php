<?php
//Conexao com o banco de dados
$servername = "localhost";
$username = "root";
$passwd = "";
$dbname = "agendamento";

$connect = mysqli_connect($servername, $username, $passwd, $dbname);

if(mysqli_connect_error()){
    echo"Falha na conexao" . mysqli_connect_error();
}
?>