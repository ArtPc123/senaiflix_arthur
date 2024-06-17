<?php
include("config.php");

$id_cliente = $_POST["id_cliente"];
$plano = $_POST["plano"];
$data_inicio = $_POST["data_inicio"];
$data_fim = $_POST["data_fim"];

$sql = "INSERT INTO assinatura(id_cliente, plano, data_inicio, data_fim)
VALUES	('$id_cliente', '$plano', '$data_inicio', '$data_fim')";

if ($conn->query($sql)==TRUE){
	echo "cadastrado com sucesso";
}
else{
	echo"erro";
}
header ('Location: assinaturas_cadastro.php')
	
?>