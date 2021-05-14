<?php

require_once("htdocs/conexao.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$formacao = $_POST['nivel'];
$area = $_POST['formacao'];
$outros = $_POST['experiencia'];

$sql = "INSERT INTO `usuários` (`nome`, `telefone`, `email`, `nivel`, `formacao`, `experiencia`) VALUES (`$nome`, `$telefone`, `$email`, `$formacao`, `$area`, `$outros`)";

if(!$sql){
    echo("Ocorreu um erro na inserção");
}
else{
    echo("Dados inseridos com sucesso");
}

?>