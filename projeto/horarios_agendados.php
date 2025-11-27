<h1>Horarios agendados</h1>

<?php
$sql = "SELECT u.*, s.name AS servico_name, s.price AS servico_preco

        FROM usuarios u
        LEFT JOIN services s ON u.service_id = s.id
        ORDER BY u.data, u.horario";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>"; #table css
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Horário</th>";
        print "<th>Data</th>";
        print "<th>Observação</th>";
        print "<th>Ações</th>";
        print "<th>Preço</th>";
        print "<th>Serviços</th>";
        print "</tr>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->horario."</td>";
        print "<td>".$row->data."</td>";
        print "<td>".$row->observacao."</td>";
        print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
        print "<td>R$ ".number_format($row->servico_preco, 2, ',', '.')."</td>";

            print "<td>".($row->servico_name ?? $row->serviço)."</td>";
        print "</tr>";
    }
    print "</table>";
}else{
    print "<p class='alert alert-danger'>Não encontrou resultados</p>";
}

?>