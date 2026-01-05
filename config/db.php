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
 $dbname = "refactu";
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 echo "Connection succesfull";
 $sql = "CREATE TABLE facturas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    concepto VARCHAR(200) NOT NULL
    );"
 ;
 $result = $conn->query($sql);
 if( $result === TRUE) {
    echo " Table created successfully";
 } else {
    echo " Error creating table: " . $conn->error;
 }
?>