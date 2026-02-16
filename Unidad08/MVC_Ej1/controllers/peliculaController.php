<?php
    require_once "models/Pelicula.php";
    require_once "models/Director.php";

    class PeliculaController {
        private $modelo;
        private $modeloDirector;

        public function __construct($conexion) {
            $this->modelo = new Pelicula($conexion);
            $this->modeloDirector = new Director($conexion);
        }

        public function index() {
            if (isset($_GET['director_id']) && $_GET['director_id'] != "") {
                $peliculas = $this->modelo->filtrarPorDirector($_GET['director_id']);
            }
        }
    }
?>