<?php
     session_start();
     if (isset($_SESSION['user_id'])){
         include 'indexlog.php';
     } else {
         include 'indexunlog.php';
     }
     ?>