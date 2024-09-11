<?php
   $host ="localhost";
   $db = "holf";
   $user = "root";
   $pass = "";


   $mysqli = new mysqli ($host, $user, $pass, $db);
     if ($mysqli->connect_errno) {
   die("falha na conexão com o banco de dados!!");

     }
?>