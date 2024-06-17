<?php
include("config.php");

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$status = 1;

$sql = "INSERT INTO clientes(nome, cpf, endereco, bairro, cidade, estado, cep, email, telefone)
VALUES	('$nome', '$cpf', '$endereco', '$bairro', '$cidade', '$estado', '$cep', '$email', '$telefone')";

if ($conn->query($sql)==TRUE){
	echo "cadastrado com sucesso";
}
else{
	echo"erro";
}
header ('Location: clientes_cadastro.php')
	
?>