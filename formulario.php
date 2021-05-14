<?php include_once"conexao.php";?>
<html>
<body>
<?php
$nome = $_GET["nome"];
$telefone = $_GET["telefone"];
$email = $_GET["email"];
$formacao = $_GET["nivel"];
$area = $_GET["formacao"];
$outros = $_GET["experiencia"];

$conn= mysqli_connect($host, $usuario, $senha, $bd);

mysqli_select_db($conn, '$bd');
$sql = "INSERT INTO usuarios (nome, telefone, email, formacao, area, outros) VALUES ('$nome', '$telefone', '$email', '$formacao', '$area', '$outros')";

if(mysqli_query($conn, $sql)){
    echo("<script>alert('Salvei seus dados!'); window.location = 'formulario.html';</script>");
}
else{
    echo("Erro na conexão".$sql."<br>".mysqli_error($conn));
}
mysqli_close($conn);
?>
</body>
</html>