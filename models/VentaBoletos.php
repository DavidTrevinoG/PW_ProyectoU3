<?php
require_once './models/Conexion.php';

class VentaBoletos {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function obtenerVentasBoletos() {
        $query = "SELECT * FROM ventas_boletos";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public function obtenerClientes() {
        $query = "SELECT * FROM clientes";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public function obtenerPeliculas() {
        $query = "SELECT * FROM peliculas";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public function obtenerEmpleados() {
        $query = "SELECT * FROM empleados";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function insertarVentaBoleto($cliente_id, $pelicula_id, $empleado_id, $cantidad_tickets, $total, $fecha_venta) {
        $query = "INSERT INTO ventas_boletos (cliente_id, pelicula_id, empleado_id, cantidad_tickets, total, fecha_venta) VALUES ('$cliente_id', '$pelicula_id', '$empleado_id', '$cantidad_tickets', '$total', '$fecha_venta')";
        return $this->conexion->conectar()->query($query);
    }

    public function obtenerVentaBoletoPorId($id) {
        $query = "SELECT * FROM ventas_boletos WHERE id = $id";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_assoc();
    }

    public function actualizarVentaBoleto($id, $cliente_id, $pelicula_id, $empleado_id, $cantidad_tickets, $total, $fecha_venta) {
        $query = "UPDATE ventas_boletos SET cliente_id = '$cliente_id', pelicula_id = '$pelicula_id', empleado_id = '$empleado_id', cantidad_tickets = '$cantidad_tickets', total = '$total', fecha_venta = '$fecha_venta' WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }

    public function eliminarVentaBoleto($id) {
        $query = "DELETE FROM ventas_boletos WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }
}
?>
