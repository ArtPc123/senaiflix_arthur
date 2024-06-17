<?php
include("config.php");
$id = $_GET["id"];
$sql = "DELETE FROM usuarios WHERE id = '$id'";
$conn->query($sql);

header ('Location: usuario_listar.php')
?>