<?php
require_once './models/Conexion.php';

class Genero {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function obtenerGeneros() {
        $query = "SELECT * FROM generos";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function insertarGenero($nombre) {
        $query = "INSERT INTO generos (nombre) VALUES ('$nombre')";
        return $this->conexion->conectar()->query($query);
    }

    public function obtenerGeneroPorId($id) {
        $query = "SELECT * FROM generos WHERE id = $id";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_assoc();
    }

    public function actualizarGenero($id, $nombre) {
        $query = "UPDATE generos SET nombre = '$nombre' WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }

    public function eliminarGenero($id) {
        $query = "DELETE FROM generos WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }
}
?>
