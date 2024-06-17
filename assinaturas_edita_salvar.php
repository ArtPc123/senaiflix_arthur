<?php
include("config.php");

$id = $_POST['id'];
$id_cliente = $_POST["id_cliente"];
$plano = $_POST["plano"];
$data_inicio = $_POST["data_inicio"];
$data_fim = $_POST["data_fim"];


$sql = "UPDATE assinatura SET 
                id_cliente='$id_cliente',  
                plano='$plano',                                
                data_inicio='$data_inicio', 
                data_fim='$data_fim'
            WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error: " . $conn->error;
    }
header ('Location: assinaturas_listar.php')

	
?>