<?php
include_once('conexao.php');

$Nome = $_POST['nome'];
$CPF = $_POST['cpf'];
$Telefone = $_POST['telefone'];
$Email = $_POST['email'];
$Endereco = $_POST['endereco'];
$Bairro = $_POST['bairro'];
$CEP = $_POST['cep'];
$Nascimento = $_POST['nascimento'];
$Sexo = $_POST['sexo'];
$Formacao = $_POST['formacao'];
$Area = $_POST['area'];
$Curso = $_POST['curso'];
$Termo = $_POST['termo'];

mysqli_select_db($conn, '$database');
$sql = "INSERT INTO candidato (Nome, CPF, Telefone, Email, Endereco, Bairro, CEP, Nascimento, Sexo, Formacao, Area, Curso, Termo) VALUES ('$Nome', '$CPF', '$Telefone', '$Email', '$Endereco', '$Bairro', '$CEP', '$Nascimento' , '$Sexo', '$Formacao', '$Area', '$Curso', '$Termo')";

if(mysqli_query($conn, $sql)){
    echo "Salvei seus dados!";
}
else{
    echo "Ops! Você já fez seu cadastro!";
}
?>
