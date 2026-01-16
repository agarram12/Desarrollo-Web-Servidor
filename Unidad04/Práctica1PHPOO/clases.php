<?php
    interface certificable{
        public function obtenerEtiqueta();
    }
    
    abstract class Vehiculo {
        private string $id;
        protected string $nombre;
        protected string $fechaAdquisicion;
        protected float $kilometraje;
        protected array $extras;

        protected static int $contador = 0;
        // función para limpiar el ID
        public static function formatearCodigo($cadena) {
            $cadenaFormateada = str_replace(" ", "", $cadena);
            $cadenaFormateada = strtoupper($cadenaFormateada);
            return $cadenaFormateada;
        }

        public function __construct($id, $nombre, $fecha, $kilometraje, $extras) {
            $idNormalizado = self::formatearCodigo($id);
            if (!preg_match('/^[A-Z]{3}-[0-9]{4}[A-Z]$/', $idNormalizado)) {
                throw new Exception("ID del vehículo inválido", $idNormalizado);
            }
            if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha)) {
                throw new Exception("Fecha del vehículo no válida", $fecha);
                
            }
            $this->id = $idNormalizado;
            $this->nombre = $nombre;
            $this->fechaAdquisicion = $fecha;
            $this->kilometraje = $kilometraje;
            $this->extras = $extras;
            self::$contador++;
        }
        public function calcularSalud() {
            $salud = 100;
            $fechaAdquisicion = new DateTime(($this->fechaAdquisicion));
            $fechaActual = new DateTime();
            $edad = $fechaActual->diff($fechaAdquisicion)->y;

            if ($edad > 25 ) {
                $salud -= 25;
            }
            if ($this->kilometraje > 20000 ) {
                $salud -=25;
            }
        }
        
        // Método abstracto que se implementa en las hijas
        abstract public function calcularAutonomia();
    }

    class Electrico extends Vehiculo {
        public function obtenerEtiqueta() {
            return ("Etiqueta 0 Emisiones - Exento de restricciones.");
        }
        public function calcularAutonomia() {
            return 400;
        }
    }

    class Hidrogeno extends Vehiculo {
        public function obtenerEtiqueta() {
            return ("tiqueta ECO - Acceso permitido a centro ciudad");
        }
        public function calcularAutonomia() {
            return 650;
        }
    }
?>