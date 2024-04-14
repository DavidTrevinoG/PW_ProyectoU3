-- Crear la base de datos para el cine
CREATE DATABASE cine_db;

-- Usar la base de datos
USE cine_db;


-- Tabla para los géneros de películas
CREATE TABLE generos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

-- Tabla para los clientes
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(255),
    telefono VARCHAR(20),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla para los empleados
CREATE TABLE empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    cargo VARCHAR(100),
    salario DECIMAL(10, 2),
    fecha_contratacion DATE
);

-- Tabla para las películas
CREATE TABLE peliculas (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    duracion INT,
    clasificacion VARCHAR(50),
    lanzamiento DATE,
    genero_id INT,
    FOREIGN KEY (genero_id) REFERENCES generos(id)
);

-- Tabla para las ventas de boletos
CREATE TABLE ventas_boletos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    pelicula_id INT,
    empleado_id INT,
    cantidad_tickets INT,
    total DECIMAL(10, 2),
    fecha_venta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id),
    FOREIGN KEY (pelicula_id) REFERENCES peliculas(id),
    FOREIGN KEY (empleado_id) REFERENCES empleados(id)
);

-- Tabla para la venta de snacks
CREATE TABLE ventas_snacks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    empleado_id INT,
    producto VARCHAR(255),
    cantidad INT,
    total DECIMAL(10, 2),
    fecha_venta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id),
    FOREIGN KEY (empleado_id) REFERENCES empleados(id)
);
