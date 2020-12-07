
<div class="card-center" style="width: 50%;">
    <h3 class="display-4"> Cadastro de usuários </h3>
    <form action="../php_actions/create.php" method="POST">
    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Nome completo</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo">
        </div>
    </div>
    <div class="form-group row">
        <label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="login" id="usuario" placeholder="Usuario">
        </div>
    </div>
    <div class="form-group row">
        <label for="passwd" class="col-sm-2 col-form-label">Senha</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" name="senha" id="passwd" placeholder="Senha">
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Tipo de Usuario</legend>
        <div class="col-sm-10">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo" id="administrador" value="administrador">
            <label class="form-check-label" for="gridRadios1">
                Administrador
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo" id="professor" value="professor" checked>
            <label class="form-check-label" for="professor">
                Professor
            </label>
            </div>
        </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
        </div>
    </div>
    </form>
</div>
<hr>
<div>
<?php include('lista_usuario.php');
?>
</div>


