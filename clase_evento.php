<?php
include 'verificar_sesion.php';

class Evento {
    public $descripcion;
    public $tipo;
    public $lugar;
    public $fecha;
    public $hora;

    public function __construct($desc, $tipo, $lugar, $fecha, $hora) {
        $this->descripcion = $desc;
        $this->tipo = $tipo;
        $this->lugar = $lugar;
        $this->fecha = $fecha;
        $this->hora = $hora;
    }

    public function mostrarEvento() {
        return "{$this->descripcion} - {$this->tipo} en {$this->lugar} el {$this->fecha} a las {$this->hora}";
    }

    public static function filtrarEventos($eventos, $criterio, $valor) {
        return array_filter($eventos, function($evento) use ($criterio, $valor) {
            return stripos($evento->$criterio, $valor) !== false;
        });
    }
}
?>

