<?php
require 'db.php';

$stmt = $conexion->prepare("INSERT INTO proyecto (nombre, descripcion, presupuesto, fecha_inicio, fecha_fin) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([
    $_POST['nombre'],
    $_POST['descripcion'],
    $_POST['presupuesto'],
    $_POST['fecha_inicio'],
    $_POST['fecha_fin']
]);

echo "✅ Proyecto registrado correctamente.";
?>
