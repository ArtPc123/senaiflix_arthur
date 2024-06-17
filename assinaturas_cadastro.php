<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Assinatura</title>
	 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/1.css">
</head>
<body>
<?php include 'header1.php'; ?>
<form action="assinaturas_cadastro_salvar.php" method="post">
    <label for="id_cliente">ID Cliente:</label><br>
    <input type="text" id="id_cliente" name="id_cliente"><br><br>
    
    <label for="plano">Plano:</label><br>
    <input type="text" id="plano" name="plano"><br><br>
    
    <label for="data_inicio">Data de Início:</label><br>
    <input type="date" id="data_inicio" name="data_inicio"><br><br>
    
    <label for="data_fim">Data de Fim:</label><br>
    <input type="date" id="data_fim" name="data_fim"><br><br>
    
    <input type="submit" value="Enviar">
</form>
	<?php include 'footer.php'?>
</body>
</html>