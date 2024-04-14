<?php
require_once './models/Conexion.php';

class Snack {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function obtenerSnacks() {
        $query = "SELECT * FROM snacks";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function insertarSnack($nombre, $precio) {
        $query = "INSERT INTO snacks (nombre, precio) VALUES ('$nombre', '$precio')";
        return $this->conexion->conectar()->query($query);
    }

    public function obtenerSnackPorId($id) {
        $query = "SELECT * FROM snacks WHERE id = $id";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_assoc();
    }

    public function actualizarSnack($id, $nombre, $precio) {
        $query = "UPDATE snacks SET nombre = '$nombre', precio = '$precio' WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }

    public function eliminarSnack($id) {
        $query = "DELETE FROM snacks WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }
}
?>
