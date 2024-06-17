<?php
include("config.php");

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];


$sql = "INSERT INTO usuarios (nome, usuario, senha, email)
VALUES	('$nome', '$usuario', '$senha', '$email')";

if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error: " . $conn->error;
    }


	
?>