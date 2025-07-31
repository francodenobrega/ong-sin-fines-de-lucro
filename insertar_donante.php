<?php
require 'db.php';

$stmt = $conexion->prepare("INSERT INTO donante (nombre, email, direccion, telefono) VALUES (?, ?, ?, ?)");
$stmt->execute([
    $_POST['nombre'],
    $_POST['email'],
    $_POST['direccion'],
    $_POST['telefono']
]);

echo "✅ Donante registrado correctamente.";
?>
