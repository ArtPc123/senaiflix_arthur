<?php
include("config.php");

$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$ano_lancamento = $_POST["ano_lancamento"];
$genero = $_POST["genero"];
$classificacao = $_POST["classificacao"];
$status = 1;

$sql = "INSERT INTO filmes(titulo, descricao, ano_lancamento, genero, classificacao)
VALUES	('$titulo', '$descricao', '$ano_lancamento', '$genero', '$classificacao')";

if ($conn->query($sql)==TRUE){
	echo "cadastrado com sucesso";
}
else{
	echo"erro";
}
header ('Location: filmes_cadastro.php')
	
?>