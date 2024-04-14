<?php

require_once 'Conexion.php';

class Empleado {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    // Método para obtener todos los empleados
    public function obtenerEmpleados() {
        $query = "SELECT * FROM empleados";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    // Método para agregar un nuevo empleado
    public function agregarEmpleado($nombre, $cargo, $salario, $fecha_contratacion) {
        $query = "INSERT INTO empleados (nombre, cargo, salario, fecha_contratacion) VALUES ('$nombre', '$cargo', $salario, '$fecha_contratacion')";
        return $this->conexion->conectar()->query($query);
    }

    // Método para obtener los detalles de un empleado por su ID
    public function obtenerEmpleadoPorId($id) {
        $query = "SELECT * FROM empleados WHERE id = $id";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_assoc();
    }

    // Método para actualizar los detalles de un empleado
    public function actualizarEmpleado($id, $nombre, $cargo, $salario, $fecha_contratacion) {
        $query = "UPDATE empleados SET nombre = '$nombre', cargo = '$cargo', salario = $salario, fecha_contratacion = '$fecha_contratacion' WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }

    // Método para eliminar un empleado por su ID
    public function eliminarEmpleado($id) {
        $query = "DELETE FROM empleados WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }
}
?>
