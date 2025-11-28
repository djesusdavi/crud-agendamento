<h1>Agendar Horario</h1> 
<form action="?page=salvar" method="POST"> <!--Envio dos dados para a pagina salvar -->
    <input type="hidden" name="acao" value="agendar">

    <div class="mb-3"><!--margin bottom 3 --> <!-- formularios -->
        <label>Nome</label>
        <input type="text" name="nome" class="form-control"> <!--css input -->
    </div>
    <div class="mb-3"> <!--margin bottom 3 -->
        <label>Horário</label>
        <input type="time" name="horario" class="form-control"><!--css input -->
    </div>

     <div class="mb-3"> <!--margin bottom 3 -->
        <label>Data</label>
        <input type="date" name="data" class="form-control"><!--css input -->
    </div>

    <div class="mb-3">
  <label>Serviço</label>
  <select name="service_id" id="service_id" class="form-control">
    <option value="">Selecione o serviço...</option>
    <?php
      $rs = $conn->query("SELECT id, name FROM services ORDER BY name"); #passar a escolha do serviço para o bd
      while($s = $rs->fetch_object()){
        echo "<option value=\"{$s->id}\">{$s->name}</option>";
      }
    ?>
  </select>
    </div>


     <div class="mb-3"> <!--margin bottom 3 -->
        <label>Observação (Ex: Prefere navalha)</label>
        <input type="text" name="observacao" class="form-control"><!--css input -->
    </div>

    <div class="mb-3"> <!--margin bottom 3 --> <!-- botao para enviar -->
        <button type="submit" class="btn btn-primary">Enviar</button> <!-- button css btn -->


    </div>


</form>