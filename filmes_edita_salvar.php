<?php
include("config.php");

$id = $_POST['id'];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$ano_lancamento = $_POST["ano_lancamento"];
$genero = $_POST["genero"];
$classificacao = $_POST["classificacao"];


$sql = "UPDATE filmes SET 
                titulo='$titulo',  
                descricao='$descricao',                                
                ano_lancamento='$ano_lancamento', 
                genero='$genero', 
                classificacao='$classificacao'
            WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error: " . $conn->error;
    }
header ('Location: filmes_listar.php')

	
?>