<?php

require_once './models/Conexion.php';

class VentaSnack
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

//listar ventas
    public function obtenerVentasSnacks()
    {
        $query = "SELECT * FROM ventas_snacks";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
//listar cvlientes
    public function obtenerClientes()
    {
        $query = "SELECT * FROM clientes";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
// listar botnas
    public function obtenerSnacks()
    {
        $query = "SELECT * FROM snacks";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
// listar empleados
    public function obtenerEmpleados()
    {
        $query = "SELECT * FROM empleados";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
// listar ventas
    public function obtenerVentaSnackPorId($id)
    {
        $query = "SELECT * FROM ventas_snacks WHERE id = $id";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_assoc();
    }
// agregar venta
    public function registrarVenta($cliente_id, $snack_id, $empleado_id, $cantidad, $total, $fecha_venta)
    {
        $query = "INSERT INTO ventas_snacks (cliente_id, producto, empleado_id, cantidad, total, fecha_venta) VALUES ('$cliente_id', '$snack_id', '$empleado_id', '$cantidad', '$total', '$fecha_venta')";
        return $this->conexion->conectar()->query($query);
    }
//modificar venta
    public function actualizarVentaSnack($id, $cliente_id, $snack_id, $empleado_id, $cantidad, $total, $fecha_venta)
    {
        $query = "UPDATE ventas_snacks SET cliente_id = '$cliente_id', producto = '$snack_id', empleado_id = '$empleado_id', cantidad = '$cantidad', total = '$total', fecha_venta = '$fecha_venta' WHERE id = '$id'";
        return $this->conexion->conectar()->query($query);
    }
// eliminar venta
    public function eliminarVentaSnack($id)
    {
        $query = "DELETE FROM ventas_snacks WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }
}
