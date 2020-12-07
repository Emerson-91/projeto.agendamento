
<table class="table table-hover table-responsive-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="text-align: center">Id</th>
      <th scope="col" style="text-align: center">Nome Completo</th>
      <th scope="col" style="text-align: center">Usuário</th>
      <th scope="col center"style="text-align: center">Tipo de usuário</th>
      <th scope="col center"style="text-align: center">Opçoes</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM usuarios";
    $resultado_usuarios = mysqli_query($connect, $sql);
    while($dados_usuarios = mysqli_fetch_assoc($resultado_usuarios)){
    ?>
    <tr>
      <th scope="row" style="text-align: center"><?php echo $dados_usuarios['id'] ?></th>
      <td scope="row" style="text-align: center"><?php echo $dados_usuarios['nome'] ?></td>
      <td scope="row" style="text-align: center"><?php echo $dados_usuarios['login'] ?></td>
      <td scope="row" style="text-align: center"><?php echo $dados_usuarios['tipo'] ?></td>
      <td scope="row" style="text-align: center"><a data-toggle="modal"href="#editar<?php echo $dados_usuarios['id'] ?>" class="btn btn-info" >atualizar</a> <a  data-toggle="modal"href="#modal<?php echo $dados_usuarios['id'] ?>"  class="btn btn-danger">Apagar</a></td>
 

<!-- Modal delete -->
    <div id="modal<?php echo $dados_usuarios['id'] ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Alerta</h4>
                    <p>Tem certeza que deseja excluir o  usuário: <?php echo $dados_usuarios['nome'] ?>? </p>
                </div>
                <div class="modal-footer">
                

                    <form action="../php_actions/delete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $dados_usuarios['id'] ?>">
                        <button type="submit" name="btn-deletar" class="btn btn-danger">deletar</button>
                        <a href="#!" class="btn btn-info" data-dismiss="modal">cancelar</a>
                    </form>
                </div>
            </div>    
        </div>
    </div>

 <!-- Modal Editar -->   
    <div id="editar<?php echo $dados_usuarios['id'] ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header alert-light">
                <h3>Editar usuário</h3>
                </div>
                <div class="modal-body">
                    <form action="../php_actions/update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $dados_usuarios['id']?>">
                        <div class="form-group row">
                            <label for="nome" class="col-sm-2 col-form-label">Nome completo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" id="nome"  value="<?php echo $dados_usuarios['nome'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="login" id="usuario"value="<?php echo $dados_usuarios['login'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passwd" class="col-sm-2 col-form-label">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="senha" id="passwd" placeholder="Nova Senha">
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
                       
                </div>
                <div class="modal-footer">
                

                    
                        <input type="hidden" name="id" value="<?php echo $dados_usuarios['id'] ?>">
                        <button type="submit" name="btn-editar" class="btn btn-success">salvar</button>
                        <a href="#!" class="btn btn-info" data-dismiss="modal">cancelar</a>
                    </form>
                </div>
            </div>    
        </div>
    </div>

 
    </tr>
    <?php } ?>
  </tbody>
</table>





