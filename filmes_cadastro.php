<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Filmes</title>
	 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles/1.css">
</head>
<body>
<?php include 'header1.php'; ?>
 <form action="filmes_cadastro_salvar.php" method="post">
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" required><br><br>
    <label for="descricao">Descrição:</label>
    <input type="text" id="descricao" name="descricao" required><br><br>
    <label for="ano_lancamento">Ano de Lançamento:</label>
    <input type="text" id="ano_lancamento" name="ano_lancamento" required><br><br>
    <label for="classificacao">Classificação:</label>
    <input type="text" id="classificacao" name="classificacao" required><br><br>
    <label for="genero">Gênero:</label>
    <select id="genero" name="genero" required>
        <option value="Ação">Ação</option>
        <option value="Comédia">Comédia</option>
        <option value="Drama">Drama</option>
        <option value="Suspense">Suspense</option>
        <option value="Ficção Científica">Ficção Científica</option>
        <option value="Fantasia">Fantasia</option>
        <option value="Aventura">Aventura</option>
        <option value="Animação">Animação</option>
        <option value="Documentário">Documentário</option>
        <option value="Horror">Horror</option>
    </select><br><br>
    <input type="submit" value="Enviar">
</form>
<?php include 'footer.php'?>

	
</body>
</html>