<?php

include './DB/connect.php';

if(isset($_GET['id'])){
    $id_recebido = $_GET['id'];
    $sql = "DELETE FROM cliente WHERE id = $id_recebido";
    $result = mYsqli_query($conn, $sql);

    if($result){
        header('location:index.php');
    } else{
        die(mysqli_error($conn));
    }
}

?>