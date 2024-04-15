<?php
require_once './models/Conexion.php';

class Snack {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

// listar snacks
    public function obtenerSnacks() {
        $query = "SELECT * FROM snacks";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

//agregar snack
    public function insertarSnack($nombre, $precio) {
        $query = "INSERT INTO snacks (nombre, precio) VALUES ('$nombre', '$precio')";
        return $this->conexion->conectar()->query($query);
    }

//buscar snack
    public function obtenerSnackPorId($id) {
        $query = "SELECT * FROM snacks WHERE id = $id";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_assoc();
    }

// modificar un snack
    public function actualizarSnack($id, $nombre, $precio) {
        $query = "UPDATE snacks SET nombre = '$nombre', precio = '$precio' WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }

// se acabon el snack
    public function eliminarSnack($id) {
        $query = "DELETE FROM snacks WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }
}
?>
