<?php
    class Evento {
        protected $titulo;
        protected $descripcion;
        protected $fecha;
        protected $hora;
        protected $categoria;

        public function __construct($titulo, $descripcion, $fecha, $hora, $categoria)
        {
            $this->titulo = $titulo;
            $this->descripcion = $descripcion;
            $this->fecha = $fecha;
            $this->hora = $hora;
            $this->categoria = $categoria;
        }

        public function getFechaCompleta() {
            return new DateTime(($this->fecha . " " . $this->hora));
        }

        public function esProximo() {
            $ahora = new DateTime();
            $evento = $this->getFechaCompleta();
            $diferencia = $evento->getTimestamp() - $ahora->getTimestamp();
            return $diferencia > 0 && $diferencia <= 86400;    
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function getCategorias() {
            return $this->categoria;
        }
    }
?>