<?php
session_start();

if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
    header("Location: login.php");
    exit;
}

include_once("conexao.php");

$sql = "SELECT u.*, s.name AS servico_name, s.price AS servico_preco
        FROM usuarios u
        LEFT JOIN services s ON u.service_id = s.id
        ORDER BY u.data, u.horario";

$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd > 0){  #titulos tabela
    print "<table class='table table-hover table-striped table-bordered'>";
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

    while($row = $res->fetch_object()){ #tabelas bd

        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->horario."</td>";
        print "<td>".$row->data."</td>";
        print "<td>".$row->observacao."</td>";

        print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{return false;}\" class='btn btn-danger'>Excluir</button>
               </td>";

        print "<td>R$ ".number_format($row->servico_preco, 2, ',', '.')."</td>"; #puxar preço do serviço do bd

        print "<td>".$row->servico_name."</td>";
        print "</tr>";
    }

    print "</table>"; #caso nao tenha nenhum valor no bd

}else{
    print "<p class='alert alert-danger'>Não encontrou resultados</p>";
}
?>
