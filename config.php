<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "senaiflix_arthur";

$conn = new mysqli ($servidor, $usuario, $senha, $banco);
if ($conn->connect_error){
	die ("Erro de Conexão");
}

?>