<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "refactu";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    function insertFactura($nombre, $concepto) {
        if ($concepto == "" || $nombre == "") {
            return FALSE;
        }

        $sql = "insert into facturas (nombre, concepto) values ('$nombre', '$concepto')";
        $result = $GLOBALS['conn']->query($sql);
        return $result;
    }

    function eliminarFactura($id){
        if($id == ""){
            return FALSE;
        }
        $sql = "DELETE FROM facturas WHERE id = $id";
        $result = $GLOBALS['conn'] -> query($sql);
        if ($result === TRUE && $GLOBALS['conn']->affected_rows > 0) {
            return TRUE;
        } else {
            return FALSE; //error, o el ID no existia
        }
    }
?>