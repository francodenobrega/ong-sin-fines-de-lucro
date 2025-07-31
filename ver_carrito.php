<?php include 'verificar_sesion.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ver Carrito</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>🛒 Mi carrito de donaciones</h2>

        <?php if (!empty($_SESSION['carrito'])): ?>
            <ul>
                <?php foreach ($_SESSION['carrito'] as $item): ?>
                    <li><?= htmlspecialchars($item) ?></li>
                <?php endforeach; ?>
            </ul>

            <br>
            <form method="post" action="vaciar_carrito.php">
                <input type="submit" value="🗑 Vaciar carrito">
            </form>
        <?php else: ?>
            <div class="mensaje">
                <p>Tu carrito está vacío.</p>
            </div>
        <?php endif; ?>

        <br>
        <a href="inicio.html">⬅ Volver al inicio</a>
    </div>
</body>

</html>