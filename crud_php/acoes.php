<?php

    session_start();
    require 'conexao.php';

    if(isset($_POST['create_usuario'])){
        $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
        $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
        $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
        $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : '';


        $sql = "INSERT INTO usuario (nome, email, data_nascimento, senha) VALUES ('$nome', '$email', '$data_nascimento', '$senha')";
        
        mysqli_query($conexao, $sql);

        if(mysqli_affected_rows($conexao) > 0){
            $_SESSION['mensagem'] = 'Usuário Criado com Sucesso!';
            header('Location: index.php');
            exit;
        } else{
            $_SESSION['mensagem'] = 'Erro ao Criar Usuário!';
            header('Location: index.php');
            exit;
        }
    }

    if(isset($_POST['update_usuario'])){
        $usuario_id = mysqli_real_escape_string($conexao, $_POST['usuario_id']);

        $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
        $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
        $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
        $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));


        $sql = "UPDATE usuario SET nome = '$nome', email = '$email', data_nascimento = '$data_nascimento'";

        if(!empty($senha)){
            $sql .= ", senha='" . password_hash($senha, PASSWORD_DEFAULT) . "'";
        }
        
        $sql .= "WHERE id = '$usuario_id'";

        mysqli_query($conexao, $sql);

        if(mysqli_affected_rows($conexao) > 0){
            $_SESSION['mensagem'] = 'Usuário Atualizado com Sucesso!';
            header('Location: index.php');
            exit;
        } else{
            $_SESSION['mensagem'] = 'Erro ao Atualizar Usuário!';
            header('Location: index.php');
            exit;
        }
    }

    if(isset($_POST['delete_usuario'])){
        $usuario_id = mysqli_real_escape_string($conexao, $_POST['delete_usuario']);
        
        $sql = "DELETE FROM usuario WHERE id = '$usuario_id'";

        mysqli_query($conexao, $sql);

        if(mysqli_affected_rows($conexao) > 0){
            $_SESSION['mensagem'] = 'Usuário Deletado com Sucesso!';
            header('Location: index.php');
            exit;
        } else{
            $_SESSION['mensagem'] = 'Usuário Não Foi Deletado!';
            header('Location: index.php');
            exit;
        }
    }

?>