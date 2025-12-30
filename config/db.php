<?php
/*
    Hemos usado XAMPP para el entorno.
    Puerto de la database : 3306
    Puerto del apache : 8888
    Y la database la hemos creado desde el localhost:8888/phpmyadmin
*/
 $servername = "localhost";
 $username = "root";
 $password = "";

 $conn = new mysqli($servername, $username, $password);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 echo "Connection succesfull";
?>