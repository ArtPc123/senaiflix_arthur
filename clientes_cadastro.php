<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
	    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles/1.css">
</head>
<body>
<?php include 'header1.php'; ?>
    <form action="clientes_cadastro_salvar.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" required><br><br>
    <label for="cep">CEP:</label>
    <input type="text" id="cep" name="cep" required><br><br>
    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco"><br><br>
    <label for="bairro">Bairro:</label>
    <input type="text" id="bairro" name="bairro"><br><br>
    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade"><br><br>
    <label for="estado">Estado:</label>
    <select id="estado" name="estado" required>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
    </select><br><br>
    <input type="submit" value="Enviar">
</form>
<?php include 'footer.php'?>

<script>
    $(document).ready(function() {
        function limpaFormularioCEP() {
            $("#endereco").val(""); 
            $("#bairro").val(""); 
            $("#cidade").val("");
            $("#estado").val("");
        }
        
    
        $("#cep").blur(function() {
            var cep = $(this).val().replace(/\D/g, ''); 
            if (cep !== "") {
                var validacep = /^[0-9]{8}$/; 
                if(validacep.test(cep)) {
                  
                    $("#endereco").val("...");
                    $("#bairro").val("...");
                    $("#cidade").val("...");
                    $("#estado").val("...");
                    
                    
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {
                        if (!("erro" in dados)) {
                           
                            $("#endereco").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $("#estado").val(dados.uf);
                        } else {
                            
                            limpaFormularioCEP();
                            alert("CEP não encontrado.");
                        }
                    });
                } else {
                    
                    limpaFormularioCEP();
                    alert("Formato de CEP inválido.");
                }
            } else {
                
                limpaFormularioCEP();
            }
        });
    });
</script>
</body>
</html>