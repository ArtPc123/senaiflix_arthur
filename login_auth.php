<?php
     session_start();
     require 'config.php';

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $username = $_POST['username'];
         $password = $_POST['password'];

         
         $stmt = $conn->prepare("SELECT id, senha FROM usuarios WHERE usuario = ?");
         $stmt->bind_param("s", $username);
         $stmt->execute();
         $stmt->store_result();

         if ($stmt->num_rows > 0) {
             $stmt->bind_result($id, $stored_password);
             $stmt->fetch();
             
             if ($password === $stored_password) {
                 $_SESSION['user_id'] = $id;
                 header("Location: indexlog.php");
                 exit();
             } else {
                 echo "Senha incorreta.";
             }
         } else {
             echo "Usuário não encontrado.";
         }
         $stmt->close();
     }
     ?>