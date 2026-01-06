<html lang="es">
    <?php include 'menu.html';
        include '../services.php';
        include '../fun.php';
        ?>

    
    <head>
    <meta charset="UTF-8">
    <title>RefactuClásico - Ver Facturas</title>
    <link rel="stylesheet" href="../assets/css/style_personal.css">
    </head>
    <body>
        <header>
            <h1> Lista de Facturas </h1>
        </header>
        <div style="flex-direction: column; align-items: center;">
        <div class="caja-blanca" style = "position: relative">
            <div class='scroller-div'>
                <?php 
                    mostrarFacturas(verFacturas());
                ?>
            </div>
        </div>
        <div class = 'caja-blanca' style="position: relative; " >
            <form action="verFactura.php">
                <button class="boton" style="margin-top: 10px;">Buscar por ID</button>
            </form>
        </div>
        </div>
    </body>
</html>