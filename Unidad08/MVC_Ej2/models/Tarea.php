<?php
    class Tarea
    {
        private $conexion;
        public function __construct($conexion)
        {
            $this->conexion = $conexion;
        }

        public function obtenerTodas()
        {
            $sql = "SELECT tareas.titulo, tareas.categoria_id FROM tareas";
            $resultado = $this->conexion->query($sql);
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        public function agregarTarea($titulo, $categoria_id)
        {
            if (empty($titulo))
            {
                $stmt = $this->conexion->prepare("INSERT INTO tareas (titulo,categoria_id) VALUES (?, ?)");
                $stmt->bind_param("si", $titulo, $categoria_id);
                $stmt->execute();
            }
        }

        public function marcarCompleta($categoria_id)
        {
            $stmt = $this->conexion->prepare("UPDATE tareas SET completada = 1 WHERE categoria_id = ?");
            $stmt->bind_param("i", $categoria_id);
            $stmt->execute();
        }
    }
?>