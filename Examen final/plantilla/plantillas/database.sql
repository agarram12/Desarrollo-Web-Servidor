DROP DATABASE IF EXISTS examen4_php;
CREATE DATABASE examen4_php;
USE examen4_php;

-- Tabla usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(50),
    rol ENUM('admin', 'usuario')
);

-- Tabla salas
CREATE TABLE salas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    capacidad VARCHAR(50),
    disponible TINYINT(1) DEFAULT 1,
    usuario_id INT NULL,
    fecha_reserva TIMESTAMP NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

-- Datos iniciales usuarios
INSERT INTO usuarios (nombre, email, password, rol) VALUES 
('Admin Profe', 'admin@test.com', '1234', 'admin'),
('Alumno DAW', 'user@test.com', '1234', 'usuario');

-- Datos iniciales salas
INSERT INTO salas (nombre, capacidad, disponible) VALUES 
('Sala Atenas', '10 personas', 1),
('Sala Roma', '6 personas', 1),
('Sala París', '8 personas', 1),
('Sala Londres', '12 personas', 1);
