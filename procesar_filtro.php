<?php
include 'verificar_sesion.php';
include 'clase_evento.php';

// Lista simulada de eventos
$eventos = [
    new Evento("Concierto benéfico", "Música", "Valparaíso", "2025-08-15", "19:00"),
    new Evento("Feria de salud", "Social", "Santiago", "2025-08-10", "10:00"),
    new Evento("Charlas ambientales", "Educativo", "Temuco", "2025-08-20", "14:00"),
    new Evento("Encuentro cultural", "Cultura", "Valparaíso", "2025-08-22", "18:00")
];

// Obtener valores desde el formulario
$criterio = $_POST['criterio'] ?? '';
$valor = $_POST['valor'] ?? '';

// Aplicar el filtro
$resultados = Evento::filtrarEventos($eventos, $criterio, $valor);

// HTML para mostrar resultados
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <title>Resultados de Búsqueda</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <h2>Resultados para: <em>$criterio = $valor</em></h2>";

if (count($resultados) > 0) {
    foreach ($resultados as $evento) {
        echo "<div style='background:#e8f0fe;padding:10px;margin-bottom:10px;border-radius:5px;'>
                <strong>{$evento->mostrarEvento()}</strong>
              </div>";
    }
} else {
    echo "<p>No se encontraron eventos para ese criterio.</p>";
}

echo "<br><a href='filtro_eventos.php'>← Volver</a>
</body>
</html>";
?>
