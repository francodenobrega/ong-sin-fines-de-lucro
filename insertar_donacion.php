<?php
require 'db.php';

$stmt = $conexion->prepare("INSERT INTO donacion (monto, fecha, id_proyecto, id_donante) VALUES (?, ?, ?, ?)");
$stmt->execute([
    $_POST['monto'],
    $_POST['fecha'],
    $_POST['id_proyecto'],
    $_POST['id_donante']
]);

echo "✅ Donación registrada.";
?>
