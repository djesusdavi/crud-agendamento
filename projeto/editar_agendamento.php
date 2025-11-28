<h1>Editar Agendamento</h1>

<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object(); #buscar pelo id e auto completar

?>



<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row ->id; ?>">

    <div class="mb-3"><!--margin bottom 3 -->
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control"> <!--css input -->
    </div>
    <div class="mb-3"> <!--margin bottom 3 -->
        <label>Horário</label>
        <input type="time" name="horario" value="<?php print $row->horario;?>"class="form-control"><!--css input -->
    </div>

     <div class="mb-3"> <!--margin bottom 3 -->
        <label>Data</label>
        <input type="date" name="data" value="<?php print $row->data;?>" class="form-control"><!--css input -->
    </div>

    <div class="mb-3"> <!--margin bottom 3 -->
        <label>Serviço (Corte, Barba, Sobrancelha)</label>
        <select name="service_id" id="service_id" class="form-control">
  <option value="">Selecione o serviço...</option>
  <?php
    $rs = $conn->query("SELECT id, name FROM services ORDER BY name");
    while($s = $rs->fetch_object()){
      $sel = ($row->service_id == $s->id) ? "selected" : "";
      echo "<option value=\"{$s->id}\" {$sel}>{$s->name}</option>"; 
    }
  ?>
</select>

    </div>

     <div class="mb-3"> <!--margin bottom 3 -->
        <label>Observação (Ex: Prefere navalha)</label>
        <input type="text" name="observacao" value="<?php print $row->observacao;?>"class="form-control"><!--css input -->
    </div>

    <div class="mb-3"> <!--margin bottom 3 -->
        <button type="submit" class="btn btn-primary">Enviar</button> <!-- button css btn -->


    </div>


</form>