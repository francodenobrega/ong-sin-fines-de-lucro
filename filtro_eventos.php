<?php
include 'verificar_sesion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Filtrar Eventos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Filtrar Eventos</h2>
    <form action="procesar_filtro.php" method="POST">
        <label>Filtrar por:</label><br>
        <select name="criterio">
            <option value="lugar">Lugar</option>
            <option value="tipo">Tipo</option>
            <option value="fecha">Fecha</option>
        </select><br><br>

        <label>Valor a buscar:</label><br>
        <input type="text" name="valor" required><br><br>

        <input type="submit" value="Buscar">
    </form>
    </div>
</body>
</html>
