<?
    # Cookies
    


    # Clase evento
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

        public function esProximo() {
            $hora = new DateTime($this->fecha . '' . $this->hora);
            $ahora = new DateTime();
            $diferencia = $hora->getTimestamp() - $ahora->getTimestamp();
            return $diferencia > 0 && $diferencia <= 86400;
        }
        
        public function getFechaCompleta() {
            return date("d/m/Y", strtotime($this->fecha));
        }
    }

?>