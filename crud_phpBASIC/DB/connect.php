<!-- AULA DE CONEXÃO COM BANCO DE DADOS -->
<!-- MODO ESTRUTURADO -->

<?php

$hostname = 'localhost';
$usename = 'root';
$password = '';
$db = 'crud_basic';

$conn = new mysqli($hostname, $usename, $password, $db);

if(!$conn){
    echo "ERRO AO CONECTAR!!!";
} else{
    // echo "CONECTADO COM SUCESSO!!!";:
}

?>