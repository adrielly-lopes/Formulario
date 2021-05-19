<?php
include_once('conexao.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$formacao = $_POST['nivel'];
$area = $_POST['formacao'];
$outros = $_POST['outra_area'];

mysqli_select_db($conn, '$database');
$sql = "INSERT INTO usuarios (nome, telefone, email, formacao, area, outros) VALUES ('$nome', '$telefone', '$email', '$formacao', '$area', '$outros')";

if(mysqli_query($conn, $sql)){
    echo "Salvei seus dados!";
}
else{
    echo "Ops! Você já fez seu cadastro!";
}
?>

