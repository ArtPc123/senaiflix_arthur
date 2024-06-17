<?php
include("config.php");
$id = $_GET["id"];
$sql = "SELECT * FROM clientes WHERE id = '$id'";
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
<form action="clientes_edita_salvar.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required value="<?php echo $linha['nome']; ?>"><br><br>
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" required value="<?php echo $linha['cpf']; ?>"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required value="<?php echo $linha['email']; ?>"><br><br>
    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" required value="<?php echo $linha['telefone']; ?>"><br><br>
    <label for="cep">CEP:</label>
    <input type="text" id="cep" name="cep" required value="<?php echo $linha['cep']; ?>"><br><br>
    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" value="<?php echo $linha['endereco']; ?>"><br><br>
    <label for="bairro">Bairro:</label>
    <input type="text" id="bairro" name="bairro" value="<?php echo $linha['bairro']; ?>"><br><br>
    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" value="<?php echo $linha['cidade']; ?>"><br><br>
    <label for="estado">Estado:</label>
    <select id="estado" name="estado" required>
        <option value="AC" <?php if($linha["estado"] === 'AC') echo "selected"?>>Acre</option>
        <option value="AL" <?php if($linha["estado"] === 'AL') echo "selected"?>>Alagoas</option>
        <option value="AP" <?php if($linha["estado"] === 'AP') echo "selected"?>>Amapá</option>
        <option value="AM" <?php if($linha["estado"] === 'AM') echo "selected"?>>Amazonas</option>
        <option value="BA" <?php if($linha["estado"] === 'BA') echo "selected"?>>Bahia</option>
        <option value="CE" <?php if($linha["estado"] === 'CE') echo "selected"?>>Ceará</option>
        <option value="DF" <?php if($linha["estado"] === 'DF') echo "selected"?>>Distrito Federal</option>
        <option value="ES" <?php if($linha["estado"] === 'ES') echo "selected"?>>Espírito Santo</option>
        <option value="GO" <?php if($linha["estado"] === 'GO') echo "selected"?>>Goiás</option>
        <option value="MA" <?php if($linha["estado"] === 'MA') echo "selected"?>>Maranhão</option>
        <option value="MT" <?php if($linha["estado"] === 'MT') echo "selected"?>>Mato Grosso</option>
        <option value="MS" <?php if($linha["estado"] === 'MS') echo "selected"?>>Mato Grosso do Sul</option>
        <option value="MG" <?php if($linha["estado"] === 'MG') echo "selected"?>>Minas Gerais</option>
        <option value="PA" <?php if($linha["estado"] === 'PA') echo "selected"?>>Pará</option>
        <option value="PB" <?php if($linha["estado"] === 'PB') echo "selected"?>>Paraíba</option>
        <option value="PR" <?php if($linha["estado"] === 'PR') echo "selected"?>>Paraná</option>
        <option value="PE" <?php if($linha["estado"] === 'PE') echo "selected"?>>Pernambuco</option>
        <option value="PI" <?php if($linha["estado"] === 'PI') echo "selected"?>>Piauí</option>
        <option value="RJ" <?php if($linha["estado"] === 'RJ') echo "selected"?>>Rio de Janeiro</option>
        <option value="RN" <?php if($linha["estado"] === 'RN') echo "selected"?>>Rio Grande do Norte</option>
        <option value="RS" <?php if($linha["estado"] === 'RS') echo "selected"?>>Rio Grande do Sul</option>
        <option value="RO" <?php if($linha["estado"] === 'RO') echo "selected"?>>Rondônia</option>
        <option value="RR" <?php if($linha["estado"] === 'RR') echo "selected"?>>Roraima</option>
        <option value="SC" <?php if($linha["estado"] === 'SC') echo "selected"?>>Santa Catarina</option>
        <option value="SP" <?php if($linha["estado"] === 'SP') echo "selected"?>>São Paulo</option>
        <option value="SE" <?php if($linha["estado"] === 'SE') echo "selected"?>>Sergipe</option>
        <option value="TO" <?php if($linha["estado"] === 'TO') echo "selected"?>>Tocantins</option>
    </select><br><br>
	<input type="hidden" name="id" value="<?php echo $linha['id']; ?>"><br>
    <input type="submit" value="Editar">
</form>

<?php include 'footer.php'?>
	
</body>
</html>