<?php
require_once './models/Conexion.php';

class Genero {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

//Obtener generos de pelicula
    public function obtenerGeneros() {
        $query = "SELECT * FROM generos";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

// Agregar genero
    public function insertarGenero($nombre) {
        $query = "INSERT INTO generos (nombre) VALUES ('$nombre')";
        return $this->conexion->conectar()->query($query);
    }

// Buscar genero
    public function obtenerGeneroPorId($id) {
        $query = "SELECT * FROM generos WHERE id = $id";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_assoc();
    }

// Modificar Genero
    public function actualizarGenero($id, $nombre) {
        $query = "UPDATE generos SET nombre = '$nombre' WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }

// Eliminar genero
    public function eliminarGenero($id) {
        $query = "DELETE FROM generos WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }
}
?>
