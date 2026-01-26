<?php 
    interface rendible {
        public function calcularRendimiento();
        public function esMVP();
        public function nivelJugador();
    }

    abstract class Jugador {
        private String $nick;
        protected String $rol;
        protected int $kills;
        protected int $assists;
        protected int $deaths;
        protected String $fechaIngreso;
        protected $skills = [];
        static protected int $totalJugadores = 0;

        public function __construct($nick, $rol, $kills, $assists, $deaths, $fechaIngreso)
        {
            if(!preg_match('/^[a-zA-Z0-9]+$/', $nick)) {
                throw new Exception("El nick solo puede contener números y letras", $nick);                
            }
            $fecha = DateTime::createFromFormat('Y/m/d', $fechaIngreso);
            if
        }
    }

?>