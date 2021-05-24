<?php
include_once('conexao.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$data_nascimento = $_POST['data_nascimento'];
$sexo = $_POST['sexo'];
$formacao = $_POST['formacao'];
$area = $_POST['area'];
$curso = $_POST['curso'];
$termo = $_POST['termo'];

mysqli_select_db($conn, '$database');
$sql = "INSERT INTO cadastro (nome, cpf, telefone, email, endereco, bairro, cep, data_nascimento, sexo, formacao, area, curso, termo) VALUES ('$nome', '$cpf', '$telefone', '$email', '$endereco', '$bairro', $cep', '$data_nascimento, '$sexo', '$formacao', '$area', '$curso', '$termo)";

if(mysqli_query($conn, $sql)){
    echo "Salvei seus dados!";
}
else{
    echo "Ops! Você já fez seu cadastro!";
}
?>
