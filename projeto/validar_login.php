<?php
session_start();
include("conexao.php");

$usuario = $conn->real_escape_string($_POST["usuario"]); #validaçao de usuario
$senha = md5($_POST["senha"]); #validaçao da senha e hash

$sql = "SELECT * FROM login_usuarios WHERE usuario='{$usuario}' AND senha='{$senha}' LIMIT 1";
$res = $conn->query($sql);

if($res->num_rows > 0){
    $_SESSION["logado"] = true;
    $_SESSION["usuario"] = $usuario;
    header("Location: index.php?page=listar");
    exit;
} else {
    echo "<script>alert('Usuário ou senha inválidos!');history.back();</script>";
}
