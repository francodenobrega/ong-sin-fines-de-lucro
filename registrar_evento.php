<?php
include 'verificar_sesion.php';
include 'clase_evento.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descripcion = htmlspecialchars($_POST['descripcion']);
    $tipo = htmlspecialchars($_POST['tipo']);
    $lugar = htmlspecialchars($_POST['lugar']);
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    $evento = new Evento($descripcion, $tipo, $lugar, $fecha, $hora);

    echo "Evento registrado exitosamente:<br><br>";
    echo $evento->mostrarEvento();
} else {
    echo "Acceso no permitido.";
}
?>
