<?php
    class tareasController
    {
        private $modelo;
        public function __construct($conexion)
        {
            $this->modelo = new Tarea($conexion);
        }

        public function index()
        {
            if (isset($_POST['']))
        }
    }

?>