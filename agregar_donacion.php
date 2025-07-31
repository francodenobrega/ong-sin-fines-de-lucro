<?php
include 'verificar_sesion.php';

$campana = $_GET['campana'] ?? '';

if ($campana) {
    $_SESSION['carrito'][] = $campana;
}

header('Location: carrito.php');
exit();
?>
