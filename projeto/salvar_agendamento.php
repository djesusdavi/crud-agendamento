<?php
    switch ($_REQUEST["acao"]) {
        case 'agendar':
    $nome = $conn->real_escape_string($_POST["nome"]);
    $horario = $conn->real_escape_string($_POST["horario"]);
    $data = $conn->real_escape_string($_POST["data"]);
    $service_id = intval($_POST["service_id"]);
    $observacao = $conn->real_escape_string($_POST["observacao"]);

    $sql = "INSERT INTO usuarios (nome, horario, data, service_id, observacao)
            VALUES ('{$nome}', '{$horario}', '{$data}', {$service_id}, '{$observacao}')";

    $res = $conn->query($sql);
    if($res){
      echo "<script>alert('Agendado com Sucesso!');location.href='?page=listar';</script>";
    } else {
      echo "<script>alert('Erro ao agendar.');location.href='?page=novo';</script>";
    }
    break;

        
        case 'editar':
    $id = intval($_POST["id"]);
    $nome = $conn->real_escape_string($_POST["nome"]);
    $horario = $conn->real_escape_string($_POST["horario"]);
    $data = $conn->real_escape_string($_POST["data"]);
    $service_id = intval($_POST["service_id"]);
    $observacao = $conn->real_escape_string($_POST["observacao"]);

    $sql = "UPDATE usuarios SET
              nome='{$nome}',
              horario='{$horario}',
              data='{$data}',
              service_id={$service_id},
              observacao='{$observacao}'
            WHERE id={$id}";

    $res = $conn->query($sql);
    if($res){
      echo "<script>alert('Editado com Sucesso!');location.href='?page=listar';</script>";
    } else {
      echo "<script>alert('Erro ao editar.');location.href='?page=listar';</script>";
    }
    break;

        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
            if($res==true){
                print "<script>alert('Excluido com Sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel Excluir, tente novamente!');</script>";
                print "<script>location.href='?page=listar';</script>";

            }
            break;

        }