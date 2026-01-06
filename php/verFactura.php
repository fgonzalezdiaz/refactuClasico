<!DOCTYPE html>
<html lang="es">
    <?php include 'menu.html';
        include '../services.php';
        include '../fun.php';
    ?>
    <head>
    <meta charset="UTF-8">
    <title>RefactuClásico Inicio</title>
    <link rel="stylesheet" href="../assets/css/style_personal.css">
    </head>
    <body>
        <header>
            <h1> Tu sistema de facturación digital </h1>
        </header>
        <div style = "align-items: center; flex-direction: column;">
            <div class="caja-blanca" style="position: relative; align-items: center;" >
                <form action="" method = "POST">
                    <label for="id">Identificador</label>
                    <input class="input-simple" type="number" id="id" name="id" placeholder="Introduce el ID de la factura">
                    <button class="boton" style="margin-top: 30px;">Buscar</button>
                </form>
            </div>
            <div class="caja-blanca" style="margin-top: 20px; position: relative; align-items: center;" >
                <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        $id = $_POST['id'];
                        if(verFacturaPorID($id)){
                            mostrarFacturas(verFacturaPorID($id));
                        } else {
                            echo "No se encontró ninguna factura con ese ID";
                        }
                    }
                ?>
        </div>
    </body>
</html>