<?php
include 'verificar_sesion.php';
include 'clase_evento.php';

// Creamos una lista de eventos manualmente
$eventos = [
    new Evento("Concierto benéfico", "Música", "Valparaíso", "2025-08-15", "19:00"),
    new Evento("Feria de salud", "Social", "Santiago", "2025-08-10", "10:00"),
    new Evento("Charlas ambientales", "Educativo", "Temuco", "2025-08-20", "14:00"),
    new Evento("Encuentro cultural", "Cultura", "Valparaíso", "2025-08-22", "18:00")
];

// Filtro por lugar = "Valparaíso"
$filtrados = Evento::filtrarEventos($eventos, "lugar", "Valparaíso");

echo "<h2>Eventos filtrados por lugar: Valparaíso</h2>";
foreach ($filtrados as $evento) {
    echo "<p>" . $evento->mostrarEvento() . "</p>";
}
?>
