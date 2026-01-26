<?php
    interface Dramaturgico {
            public function resumenArgumento();
            public function esLarga();
            public function publicoObjetivo();
        }

    abstract class Obra {
        protected String $titulo;
        protected String $genero;
        protected String $duracion;
        protected String $fechaEstreno;
        protected $personajes = [];
        protected static int $totalObras = 0;


        public function __construct($titulo, $genero, $duracion, $fechaEstreno)
        {
            if ($duracion <= 0 ) {
                throw new Exception("La duración tiene que ser mayor a 0");
            }

            $formato = 'Y-m-d';
            $fecha = DateTime::createFromFormat($formato, $fechaEstreno);
            $errores = DateTime::getLastErrors();

            if ($fecha === false || $errores['warning_count'] > 0 || $errores['error_count'] > 0) {
                throw new Exception("La fecha de estreno es inválida", $fechaEstreno);
            }
        }
    }
?>