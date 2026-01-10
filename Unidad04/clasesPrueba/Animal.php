<?php
    class Animal {
        // añadimos los 
        public $nombre;
        public $color;
        public $fechaNac;
        // constructor para aceptar los datos como parametros
        public function __construct($nombre, $color, $fechaNac) {
            $this->nombre = $nombre;
            $this->color = $color;
            $this->fechaNac = $fechaNac;

        }

        public function __get($propiedad)
        {
            return $this->$propiedad;
        }

        public function __set($propiedad, $valor)
        {
            $this->$propiedad = $valor;
        }
        // obtener el año para calcular la edad del animal
        public function verEdad()
        {
            $fechaNacimiento = DateTime::createFromFormat('Y-m-d', $this->fechaNac);
            $hoy = new DateTime();
            $edad = $hoy->diff($fechaNacimiento);
            return (int) $edad->y;
        }
        // método __tostring() para mostrar los datos del animal
        public function __toString()
        {
            $edad = $this->verEdad();
            return "Animal: " . $this->nombre . "\n" .
            "Color: " . $this->color . "\n" .
            "Fecha Nacimiento: " . $this->fechaNac . "\n" .
            "Edad: " . $edad . " año" . ($edad == 1 ? "" : "s") . "\n";
        }
    }
    // crear nuevo animal
    $a1 = new Animal("Lala", "Marrón", "2018-08-15");
    echo $a1;
?>