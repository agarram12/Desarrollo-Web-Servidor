<?php
require_once 'IInformable.php';

abstract class Espacio implements IInformable {
    protected $nombre;
    protected $capacidad;

    public function __construct($nombre, $capacidad) {
        $this->nombre = $nombre;
        $this->capacidad = $capacidad;
    }
}