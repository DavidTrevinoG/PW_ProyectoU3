<?php

require_once __DIR__ . '/../models/Conexion.php';

class Cliente {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }
// Obtenre cliententes
    public function obtenerClientes() {
        $query = "SELECT * FROM clientes";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

// insertar nuevo cliente
    public function insertarCliente($nombre, $email, $telefono) {
        $query = "INSERT INTO clientes (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
        return $this->conexion->conectar()->query($query);
    }

// busdcar cliente
    public function obtenerClientePorId($id) {
        $query = "SELECT * FROM clientes WHERE id = $id";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_assoc();
    }

//modificar cleinte
    public function actualizarCliente($id, $nombre, $email, $telefono) {
        $query = "UPDATE clientes SET nombre = '$nombre', email = '$email', telefono = '$telefono' WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }

// eliminar clioente
    public function eliminarCliente($id) {
        $query = "DELETE FROM clientes WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }
}

?>
