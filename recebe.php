<?php
include_once('conexao.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$formacao = $_POST['formacao'];
$area = $_POST['area'];
$outras_areas = $_POST['outras_areas'];
$curso = $_POST['curso'];

mysqli_select_db($conn, '$database');
$sql = "INSERT INTO tabela_usuarios (nome, cpf, telefone, email, formacao, area, outras_areas, curso) VALUES ('$nome', '$cpf', '$telefone', '$email', '$formacao', '$area', '$outras_areas', '$curso')";

if(mysqli_query($conn, $sql)){
    echo "Salvei seus dados!";
}
else{
    echo "Ops! Você já fez seu cadastro!";
}
?>
