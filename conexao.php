<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "cadastro";
$conn= mysqli_connect($host, $usuario, $senha, $bd);

if(!$conn){
    die("Erro de conexão: ".mysqli_connect_error());
}
?> 