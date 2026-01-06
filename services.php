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

        $sql = "INSERT INTO facturas (nombre, concepto) VALUES (?, ?)";    
        $stmt = $GLOBALS['conn']->prepare($sql);
        if ($stmt === false) {
            return FALSE;
        }

        // ss = String (nombre) y String (concepto)
        $stmt->bind_param("ss", $nombre, $concepto);

        if ($stmt->execute()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function eliminarFactura($id){
        if($id == "" || !is_numeric($id)){
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
    function verFacturas(){
        $sql = 'SELECT * FROM facturas';
        return $GLOBALS['conn']-> query($sql) ;
    }

    function verFacturaPorID($id){
        if($id == "" || !is_numeric($id) || $id < 0) {
            return FALSE;
        }
        $sql = "SELECT * FROM facturas WHERE id = $id";
        return $GLOBALS['conn']-> query($sql) ;
    }
?>