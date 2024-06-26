<?php
include("config.php");

// Alterar a consulta SQL para buscar os nomes dos clientes
$sql = "SELECT assinatura.*, clientes.nome AS nome_cliente 
        FROM assinatura 
        JOIN clientes ON assinatura.id_cliente = clientes.id";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
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
            <th>Nome do Cliente</th>
            <th>Plano</th>
            <th>Data de Início</th>
            <th>Data do Fim</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
        <?php while ($linha = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?php echo $linha['nome_cliente']; ?></td>
            <td><?php echo $linha['plano']; ?></td>
            <td><?php echo $linha['data_inicio']; ?></td>
            <td><?php echo $linha['data_fim']; ?></td>
            <td><a href="assinaturas_edita.php?id=<?php echo $linha['id']; ?>">Editar</a></td>
            <td><a href="assinaturas_remover.php?id=<?php echo $linha['id']; ?>">Remover</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php include 'footer.php'; ?>
</body>
</html>
