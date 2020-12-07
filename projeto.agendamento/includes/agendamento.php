
<h3 class="display-4"> AGENDAMENTO </h3>
<p> Prof,  <?php echo $dados['nome'] ?></p>
<form>
  <input type="hidden" name="id" value="<?php echo $dados['id']?>">
  <input type="hidden" name="datashow" value="1"> 
  <div class="form-container">
    <div class="form-group row">
      <div class="form-col">
        <label for="curso">curso: </label>
        <input type="text" class="form-control" id="curso" placeholder="Informe o curso ">
      </div>
      <div class="form-col">
        <label for="data">data: </label>
        <input type="date" class="form-control" id="data">
      </div>
    </div>
    <div class="form-group row">    
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="turno">Sala: </label>
        </div>
        <div>
          <select class="custom-select" id="turno" tabindex="-1">
          <option selected="">selecione...</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          </select>
        </div>
      </div>
    </div>
    <div class="form-group row">  
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="turno">turno: </label>
        </div>
        <div>
          <select class="custom-select" id="turno" tabindex="-1">
            <option selected="">selecione...</option>
            <option value="manha">Manhã</option>
            <option value="noite">Noite</option>
          </select>
        </div>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="turno">horario: </label>
        </div>
        <div>
          <select class="custom-select" id="turno" tabindex="-1">
            <option selected="">selecione...</option>
            <option value="manha">08:00 às 09:15</option>
            <option value="noite">09:30 às 12:00</option>
          </select>
        </div>
      </div>
    </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
