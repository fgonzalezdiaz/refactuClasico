<?php
    function mostrarFacturas($result){
        while($row = $result->fetch_assoc()) {
            echo "<div style='border:1px solid black; margin:10px; padding:10px;'>";
            echo "<h3>Factura ID: " . $row['id'] . "</h3>";
            echo "<p><strong>Nombre:</strong> " . $row['nombre'] . "</p>";
            echo "<p><strong>Concepto:</strong> " . $row['concepto'] . "</p>";
            echo "</div>";
        }
    }
?>