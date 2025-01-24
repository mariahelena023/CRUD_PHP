<?php

include './DB/connect.php';
$sql = 'SELECT * FROM cliente';
$result = mysqli_query($conn, $sql);

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
            <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
        </header>

        <h1 class="mb-4">Clientes Cadastrados</h1>

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result) {
                        while ($linhas = mysqli_fetch_assoc($result)) {
                            $id = $linhas['id'];
                            $nome = $linhas['nome'];
                            $cpf = $linhas['cpf'];
                            $fone = $linhas['fone'];
                            $email = $linhas['email'];

                            echo '
                            <tr>
                                <td>' . $id . '</td>
                                <td>' . $nome . '</td>
                                <td>' . $cpf . '</td>
                                <td>' . $fone . '</td>
                                <td>' . $email . '</td>
                                <td>
                                    <a href="editar_cli.php?id=' . $id . '" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="excluir_cli.php?id=' . $id . '" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>