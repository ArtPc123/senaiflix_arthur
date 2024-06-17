<?php
include("config.php");
$id = $_GET["id"];
$sql = "SELECT * FROM filmes WHERE id = '$id'";
$resultado = $conn->query($sql);
$linha = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
	 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles/1.css">
</head>
<body>
<?php include 'header1.php'; ?>
<form action="filmes_edita_salvar.php" method="post">
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" value="<?php echo $linha['titulo']; ?>" required><br><br>
    <label for="descricao">Descrição:</label>
    <input type="text" id="descricao" name="descricao" value="<?php echo $linha['descricao']; ?>" required><br><br>
    <label for="ano_lancamento">Ano de Lançamento:</label>
    <input type="text" id="ano_lancamento" name="ano_lancamento" value="<?php echo $linha['ano_lancamento']; ?>" required><br><br>
    <label for="classificacao">Classificação:</label>
    <input type="text" id="classificacao" name="classificacao" value="<?php echo $linha['classificacao']; ?>" required><br><br>
    <label for="genero">Gênero:</label>
    <select id="genero" name="genero" required>
        <option value="Ação" <?php if($linha["genero"] === 'Ação') echo "selected"?>>Ação</option>
        <option value="Comédia" <?php if($linha["genero"] === 'Comédia') echo "selected"?>>Comédia</option>
        <option value="Drama" <?php if($linha["genero"] === 'Drama') echo "selected"?>>Drama</option>
        <option value="Suspense" <?php if($linha["genero"] === 'Suspense') echo "selected"?>>Suspense</option>
        <option value="Ficção Científica" <?php if($linha["genero"] === 'Ficção Científica') echo "selected"?>>Ficção Científica</option>
        <option value="Fantasia" <?php if($linha["genero"] === 'Fantasia') echo "selected"?>>Fantasia</option>
        <option value="Aventura" <?php if($linha["genero"] === 'Aventura') echo "selected"?>>Aventura</option>
        <option value="Animação" <?php if($linha["genero"] === 'Animação') echo "selected"?>>Animação</option>
        <option value="Documentário" <?php if($linha["genero"] === 'Documentário') echo "selected"?>>Documentário</option>
        <option value="Horror" <?php if($linha["genero"] === 'Horror') echo "selected"?>>Horror</option>
    </select><br><br>
	<input type="hidden" name="id" value="<?php echo $linha['id']; ?>"><br>
    <input type="submit" value="editar">
</form>

<?php include 'footer.php'?>

	
</body>
</html>