<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Formulário de Registro</title>
	<link rel="stylesheet" href="styles/1.css">
</head>
<body>
<?php include 'header1.php'?>
    <h2>Admin</h2>
    <form action="registrar_salvar.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>
        
        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario"><br>
        
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
	<?php include 'footer.php'?>
</body>
</html>
