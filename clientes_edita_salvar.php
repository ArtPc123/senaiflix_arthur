<?php
include("config.php");

$id = $_POST['id'];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];


$sql = "UPDATE clientes SET 
                nome='$nome',  
                cpf='$cpf',                                
                endereco='$endereco', 
                bairro='$bairro', 
                cidade='$cidade', 
                estado='$estado', 
				cep='$cep', 
				email='$email', 
				telefone='$telefone'
            WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error: " . $conn->error;
    }
header ('Location: clientes_listar.php')

	
?>