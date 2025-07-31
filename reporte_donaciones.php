<?php
require 'db.php';

try {
    // Consulta avanzada: número de donaciones por proyecto con más de 2
    $sql = "SELECT 
                p.id_proyecto,
                p.nombre AS nombre_proyecto,
                COUNT(d.id_donacion) AS total_donaciones,
                SUM(d.monto) AS monto_total_recaudado
            FROM
                proyecto p
            JOIN
                donacion d ON p.id_proyecto = d.id_proyecto
            GROUP BY
                p.id_proyecto, p.nombre
            HAVING
                COUNT(d.id_donacion) > 2
            ORDER BY
                monto_total_recaudado DESC";

    $stmt = $pdo->query($sql);
    $proyectos = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("❌ Error al consultar la base de datos: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Donaciones por Proyecto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
        <h1>📊 Proyectos con más de 2 Donaciones</h1>

        <?php if (count($proyectos) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID Proyecto</th>
                        <th>Nombre del Proyecto</th>
                        <th>N° Donaciones</th>
                        <th>Total Recaudado (CLP)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($proyectos as $p): ?>
                        <tr>
                            <td><?php echo $p['id_proyecto']; ?></td>
                            <td><?php echo htmlspecialchars($p['nombre_proyecto']); ?></td>
                            <td><?php echo $p['total_donaciones']; ?></td>
                            <td>$<?php echo number_format($p['monto_total_recaudado'], 0, ',', '.'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay proyectos con más de 2 donaciones registradas.</p>
        <?php endif; ?>

        <br>
        <a href="inicio.html" class="btn-secundario">⬅ Volver al inicio</a>
    </div>
</body>
</html>
