<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "cadastro";

$conn= mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Erro de conexão: ".mysqli_connect_error());
}
echo "Conexão bem sucedida";

mysqli_select_db($conn, '$database');
$sql = "INSERT INTO usuarios (nome, telefone, email, formacao, area, outros) VALUES ('$nome', '$telefone', '$email', '$formacao', '$area', '$outros')";

if(mysqli_query($conn, $sql)){
    echo "Salvei seus dados";
}
else{
    echo "Erro na conexão" .$sql. "<br>". mysqli_error($conn);
}
mysqli_close($conn);

?> 
