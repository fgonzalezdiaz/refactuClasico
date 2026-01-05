<?php 
    include 'menu.html';
    include '../services.php';
    $mensaje = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){ 
        $id = $_POST['id'];
        $resultado = eliminarFactura($id);
        if($resultado){
            $mensaje = "Factura eliminada con éxito.";
        } else {
            $mensaje = "Error al eliminar la factura.";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Eliminar Factura - RefactuClásico</title>
        <link rel="stylesheet" href="../assets/css/style_personal.css">
    </head>

    <body>
        <div class = caja-transparente>
            <header>
                <h1> Eliminar Factura </h1>
            </header>
            <?php if($mensaje != ""): ?>
                <p style="color: green; font-weight: bold; text-align: center;">
                    <?php echo $mensaje; ?>
                </p>
            <?php endif; ?>
            <form action="" method = "POST" >
            <label  for="id">Identificador:</label>
            <input class="input-simple"type="text" id="id" name="id" placeholder="Identificador De La Factura">
            <button onclick="return confirmarEliminar()" class="boton" style="margin-top: 30px;">Eliminar Factura</button>
            </form>
        </div>
        <script>
            function confirmarEliminar() {
                return confirm("¿Estás seguro de que deseas eliminar esta factura?");
            }
            if (window.history.replaceState) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </body>
</html>