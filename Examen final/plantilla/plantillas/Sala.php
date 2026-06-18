<?php
require_once 'Espacio.php';

class Sala extends Espacio {
    private $estado;

    public function __construct($nombre, $capacidad, $estado) {
        parent::__construct($nombre, $capacidad);
        $this->estado = $estado;
    }

    public function getResumen(): string {
        return "NUEVA SALA: " . strtoupper($this->nombre) . " [" . $this->estado . "]";
    }

    public function getEstilo(): string {
        return ($this->estado === 'Libre') ? "background-color: #d4edda;" : "background-color: #fff3cd;";
    }
}