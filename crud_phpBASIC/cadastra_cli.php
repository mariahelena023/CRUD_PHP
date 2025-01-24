<?php

include './DB/connect.php';
// var_dump($_POST);

if(isset($_POST['cadastrar'])){

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];

    // print_r($_POST);
    // echo "<br>";
    // echo "<br>";

    // echo $nome . '<br>';
    // echo $cpf . '<br>';
    // echo $fone . '<br>';
    // echo $email;

    $sql = "INSERT INTO cliente VALUES (DEFAULT, '$nome', '$cpf', '$fone', '$email')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:index.php');
    } else{
        die(mysqli_error($conn));
    }
}

?>