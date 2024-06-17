<?php
include("config.php");
$sql = "SELECT * FROM clientes";
$resultado = $conn->query($sql)
?>

<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset = "UTF-8">
		<title>Lista de Clientes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles/2.css">
	</head>
	<body>
	<?php include 'header1.php'; ?>
		<table>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>CPF</th>
				<th>Email</th>
				<th>Editar</th>
				<th>Remover</th>
			</tr>
<?php while ($linha = $resultado->fetch_assoc()): ?>
			<tr>
				<td><?php echo $linha['id']; ?></td>
				<td><?php echo $linha['nome']; ?></td>
				<td><?php echo $linha['cpf']; ?></td>
				<td><?php echo $linha['email']; ?></td>
				<td><a class="111" href = "clientes_edita.php?id=<?php echo $linha['id']; ?>">Editar</a></td>
				<td><a class="111" href = "clientes_remover.php?id=<?php echo $linha['id']; ?>">remover</a></td>
			</tr>
<?php endwhile; ?>
</table>
<?php include 'footer.php'?>
</body>
</html>
