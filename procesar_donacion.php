<?php
include 'verificar_sesion.php';

function simularDonacion($nombre, $monto, $metodo) {
    $fecha = date("Y-m-d H:i:s");
    return "Gracias $nombre por tu donación de \$$monto vía $metodo el $fecha.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $monto = floatval($_POST['monto']);
    $metodo = htmlspecialchars($_POST['metodo']);
    echo simularDonacion($nombre, $monto, $metodo);
} else {
    echo "Método de acceso no permitido.";
}
?>
