<?php
//conexao
require_once'../php_actions/db_connect.php';
//sessao
session_start();
//verificacao para paginas restritas
if(!isset($_SESSION['logado'])){
    header('location: ../index.php');
}

//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

/*
//saudacao de usuario
$hr = date(" H ");
if($hr >= 12 && $hr<18) {
$resp = "Boa tarde, ";}
else if ($hr >= 0 && $hr <12 ){
$resp = "Bom dia, ";}
else {
$resp = "Boa noite, ";}
*/

//header
include_once('../templates/header.php');
?>

<body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="../php_actions/logout.php">
                <img src="../recursos/img/sair.png" alt="Sair" height="30" width="30"> 
                <figcaption class="figure-caption">Sair</figcaption>
            </a>
        </li>
    </ul>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">Home</a>
           <?php if($dados['tipo'] == "administrador"){ ?>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Cadastro</a>
            <?php }?>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Agendamentos</a>
            <a class="nav-item nav-link" id="nav-relatorio-tab" data-toggle="tab" href="#nav-relatorio" role="tab" aria-controls="nav-relatorio" aria-selected="false">Relatorios</a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <?php include('principal.php');?>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <?php include('cadastro.php');?>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><?php include('agendamento.php'); ?></div>
            <div class="tab-pane fade" id="nav-relatorio" role="tabpanel" aria-labelledby="nav-relatorio-tab"><?php include('relatorio.php'); ?></div>
        </div>
    </div>
    <?php
    //footer
    
    include_once('../templates/footer.php');

    ?>
