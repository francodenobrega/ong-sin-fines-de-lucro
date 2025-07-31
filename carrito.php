<?php
include 'verificar_sesion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Carrito de Donaciones</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Campañas disponibles</h2>
        <ul>
            <li>
                Agua potable para zonas rurales <br>
                <a href="agregar_donacion.php?campana=Agua potable">Agregar al carrito</a>
            </li>
            <li>
                Kits escolares para niños vulnerables <br>
                <a href="agregar_donacion.php?campana=Kits escolares">Agregar al carrito</a>
            </li>
            <li>
                Salud comunitaria en sectores aislados <br>
                <a href="agregar_donacion.php?campana=Salud comunitaria">Agregar al carrito</a>
            </li>
        </ul>
        <br>
        <a href="ver_carrito.php">🛒 Ver mi carrito</a>
    </div>
</body>

</html>