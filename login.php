<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles/1.css">
</head>
<body>
 <form action="login_auth.php" method="post">
         <label for="username">Usuário:</label>
         <input type="text" id="username" name="username" required>
         <label for="password">Senha:</label>
         <input type="password" id="password" name="password" required>
         <button type="submit">Login</button>
     </form>
	 <?php include 'footer.php'?>
	 </body>
</html>