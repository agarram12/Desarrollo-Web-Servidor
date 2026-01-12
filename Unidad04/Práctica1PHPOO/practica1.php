<?php
    interface certificable{
        public function obtenerEtiqueta();
    }
    
    abstract class Vehiculo {
        private $id;
        protected $nombre;
        protected $fechaAdquisicion;
        protected $kilometraje;
        protected $extras;
        protected static $contador = 0;
        // función para limpiar el ID
        public static function formatearCodigo($cadena) {
            $cadenaFormateada = str_replace(" ", "", $cadena);
            $cadenaFormateada = strtoupper($cadenaFormateada);
            return $cadenaFormateada;
        }

        public function __construct($id, $nombre, $fechaAdquisicion, $kilometraje, $extras) {
            $id = self::formatearCodigo($id);
            if (!preg_match('/^[A-Z]{3}-[0-9]{4}[A-Z]$/', $id)) {
                throw new Exception("ID del vehículo inválido", $id);
            }
            if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fechaAdquisicion)) {
                throw new Exception("Fecha del vehículo no válida", $fechaAdquisicion);
                
            }
            $this->id = $id;
            $this->nombre = $nombre;
            $this->fechaAdquisicion = $fechaAdquisicion;
            $this->kilometraje = $kilometraje;
            $this->extras = $extras;
        }
        public function calcularSalud() {
            $fechaAdquisicion = new DateTime(($this->fechaAdquisicion));
            $fechaActual = new DateTime();
            $edad = $fechaActual->diff($fechaAdquisicion)->y;
        }
    }
?>