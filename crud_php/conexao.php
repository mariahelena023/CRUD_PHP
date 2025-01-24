<?php

$hostname = 'localhost';
$usename = 'root';
$password = '';
$db = 'crud_php';

$conn = new mysqli($hostname, $usename, $password, $db);

if(!$conn){
    echo "ERRO AO CONECTAR!!!";
} else{
    // echo "CONECTADO COM SUCESSO!!!";
}

?>