<?php
session_start();

if(isset($_SESSION["logado"]) && $_SESSION["logado"] === true){
    header("Location: index.php?page=listar");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center" style="height:100vh;">

<div class="card p-4" style="width:350px;">
    <h3 class="text-center mb-3">Login</h3>

    <form id="formLogin" action="validar_login.php" method="POST"> <!-- formulario -->
        <div class="mb-3">
            <label>Usuário</label>
            <input type="text" name="usuario" class="form-control">
        </div>

        <div class="mb-3"> <!-- formularios -->
            <label>Senha</label>
            <input type="password" name="senha" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary w-100">Entrar</button>
    </form>
</div>

<script src="assets/js/validacao_login.js"></script>
</body>
</html>
