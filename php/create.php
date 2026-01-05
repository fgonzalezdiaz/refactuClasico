<?php 
    include 'menu.html';
    include '../services.php';
    $mensaje = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_POST['nombre'];
        $concepto = $_POST['concepto'];

        $resultado = insertFactura($nombre, $concepto);
        if($resultado){
            $mensaje = "Factura creada con éxito.";
        } else {
            $mensaje = "Error al crear la factura.";
        }
    }       
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Crear Factura - RefactuClásico</title>
        <link rel="stylesheet" href="../assets/css/style_personal.css">
    </head>

    <body>
        <div class = caja-transparente>
            <header>
                <h1> Crear una nueva factura </h1>
            </header>
            <?php if($mensaje != ""): ?>
                <p style="color: green; font-weight: bold; text-align: center;">
                    <?php echo $mensaje; ?>
                </p>
            <?php endif; ?>
            <form action="" method = "POST">
            <label  for="nombre">Nombre:</label>
            <input class="input-simple"type="text" id="nombre" name="nombre" placeholder="Nombre del cliente">

            <label  for="concepto">Concepto:</label>
            <input class="input-simple"type="text" id="concepto" name="concepto" placeholder="Introduce el concepto">
            <button class="boton" style="margin-top: 30px;">Crear Factura</button>
            </form>
        </div>
        <!-- Limpia historial para no reenviar constantemente el formulario -->
        <script>
            if (window.history.replaceState) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </body>
</html>
