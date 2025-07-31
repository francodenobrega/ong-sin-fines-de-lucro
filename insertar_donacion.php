<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_proyecto = $_POST['id_proyecto'];
    $id_donante = $_POST['id_donante'];
    $monto = $_POST['monto'];
    $fecha = $_POST['fecha'];

    if ($monto < 1000) {
        die("El monto mínimo para donar es $1.000");
    }

    try {
        $sql = "INSERT INTO donacion (id_proyecto, id_donante, monto, fecha)
                VALUES (:id_proyecto, :id_donante, :monto, :fecha)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':id_proyecto' => $id_proyecto,
            ':id_donante' => $id_donante,
            ':monto' => $monto,
            ':fecha' => $fecha
        ]);
        echo "✅ Donación registrada exitosamente.";
    } catch (PDOException $e) {
        echo "❌ Error: " . $e->getMessage();
    }
}
