<?php
    class Pelicula {
        private $conexion;

        public function __construct($conexion) {
            $this->conexion = $conexion;
        }

        public function obtenerTodas() {
            $sql = "SELECT peliculas.id, peliculas.titulo, directores.nombre AS director
            FROM peliculas
            INNER JOIN directores ON peliculas.director_id = directores.id";
            $resultado = $this->conexion->query($sql);
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        public function obtenerPorId($id) {
            $stmt = $this->conexion->prepare("SELECT * FROM peliculas WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->fetch_assoc();
        }

        public function insertar($titulo, $director_id) {
            if (empty($titulo)) {
                return "El titulo no puede estar vacío";
            }

            $stmt = $this->conexion->prepare("INSERT INTO peliculas (titulo,director_id) VALUES (?, ?)");
            $stmt->bind_param("si", $titulo, $director_id);
            $stmt->execute();
        }

        public function actualizar($id, $titulo, $director_id) {
            if (empty($titulo)) {
                return "El titulo no puede estar vacío";
            }

            $stmt = $this->conexion->prepare("UPDATE peliculas SET titulo = ?, director_id = ? WHERE id = ?");
            $stmt->bind_param("sii", $titulo, $director_id, $id);
            $stmt->execute();
        }

        public function borrar($id) {
            $stmt = $this->conexion->prepare("DELETE FROM peliculas WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }

        public function filtrarPorDirector($director_id) {
            $stmt = $this->conexion->prepare(
                "SELECT peliculas.id, peliculas.titulo, directores.nombre as director
                FROM peliculas
                INNER JOIN directores ON peliculas.director_id = directores.id
                WHERE director_id = ?"
            );
            
            $stmt->bind_param("i", $director_id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }
    }
?>