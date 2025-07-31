<?php
include 'verificar_sesion.php';
unset($_SESSION['carrito']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Carrito Vacío</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>🗑 Carrito vaciado con éxito</h2>
        <p>Has eliminado todos los elementos de tu carrito.</p>
        <br>
        <a href="carrito.php">⬅ Volver a campañas</a>
    </div>
</body>

</html>