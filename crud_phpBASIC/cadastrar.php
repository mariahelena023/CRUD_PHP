<?php

include './DB/connect.php';

?>

<?php
include './DB/connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <header class="mb-4">
            <a href="index.php" class="btn btn-primary">Listar</a>
        </header>

        <h1 class="mb-4">Cadastrar Cliente</h1>

        <form class="row g-3" method="POST" action="cadastra_cli.php">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome" required>
            </div>

            <div class="col-md-6">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite o CPF" required>
            </div>

            <div class="col-md-6">
                <label for="fone" class="form-label">Telefone</label>
                <input type="text" name="fone" id="fone" class="form-control" placeholder="Digite o telefone" required>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Digite o email" required>
            </div>

            <div class="col-12">
                <input class="btn btn-success w-100" type="submit" class="submit" name="cadastrar" id="bot" value="CADASTRAR">
            </div>
        </form>
    </div>
</body>
</html>
