<?php
    class Animal {
        public $nombre;
        public $color;
        public $fechaNac;
    
        public function __get($propiedad)
        {
            return $this->$propiedad;
        }

        public function __set($propiedad, $valor)
        {
            $this->$propiedad = $valor;
        }

        public function verEdad()
        {
            $fechaNacimiento = DateTime::createFromFormat('Y-M-D', $this->fechaNac);
            $hoy = new DateTime();
            $edad = $hoy->diff($fechaNacimiento);
            return (int) $edad->y;
        }
        
        public function __toString()
        {
            $edad = $this->verEdad();
            return "Animal: " . $this->nombre . "\n" .
            "Color: " . $this->color . "\n" .
            "Fecha Nacimiento: " . $this->fechaNac . "\n" .
            "Edad: " . $edad . " año"($edad == 1 ? "" : "s") . "\n";
        }
    }
    
    
?>