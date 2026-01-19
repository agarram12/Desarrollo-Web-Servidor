<?php 
    interface evaluable {
        public function esRentable();
        public function impactoAmbiental();
        public function descripcionTecnica();
    }
    
    abstract class Invento {
        protected String $nombre;
        protected String $proposito;
        protected String $fechaPrototipo;
        protected float $coste;
        protected $materiales = [];
        protected static int $totalinventos = 0;

        public function __construct($nombre, $proposito, $fechaPrototipo, $coste, $materiales) {
            if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fechaPrototipo)) {
                throw new Exception("Fecha del prototipo no válida", $fechaPrototipo);
            }
            if ($coste < 0) {
                throw new Exception("Coste del prototipo no válido", $coste);
            }
            $this->nombre = $nombre;
            $this->proposito = $proposito;
            $this->fechaPrototipo = $fechaPrototipo;
            $this->coste = $coste;
            $this->materiales = $materiales;
            self::$totalinventos++;
        }

        public function anyoDesdePrototipo() {
            $fechaPrototipo = new DateTime(($this->fechaPrototipo));
            $fechaActual = new DateTime();
            $anyo = $fechaActual->diff($fechaPrototipo)->y;
        }

        public function __toString() {
            $fechaFormateada = date("d/m/Y", strtotime($this->fechaPrototipo));
            return "invento: {$this->nombre} | prototipo: {$fechaFormateada} | Coste: {$this->coste}";
        }

        abstract public function calcularComplejidad();
    }
?>