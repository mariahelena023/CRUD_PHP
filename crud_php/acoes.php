<?php

session_start();
require 'conexao.php';

if(isset($_POST['create_usuario'])){
    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $data_nascimento = mysqli_real_escape_string($conn, trim($_POST['data_nascimento']));
    $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conn, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : '';

    $sql = "INSERT INTO usuario (nome, email, data_nascimento, senha) VALUES ('$nome', '$email', '$data_nascimento', '$senha')";

    mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0){
        $_SESSION['mensagem'] = 'Usuário Criado com Sucesso!';
        header('Location: index.php');
        exit;
    } else{
        $_SESSION['mensagem'] = 'Erro ao Criar Usuário!';

        header('Location: index.php');
        exit;
    }
}

?>