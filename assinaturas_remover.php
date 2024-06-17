<?php
include("config.php");
$id = $_GET["id"];
$sql = "DELETE FROM assinatura WHERE id = '$id'";
$conn->query($sql);

header ('Location: assinaturas_listar.php')
?>