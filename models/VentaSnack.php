<?php

require_once './models/Conexion.php';

class VentaSnack
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function registrarVenta($cliente_id, $snack_id, $empleado_id, $cantidad, $total)
    {
        $fecha_venta = date("Y-m-d H:i:s");
        $query = "INSERT INTO ventas_snacks (cliente_id, snack_id, empleado_id, cantidad, total, fecha_venta) VALUES ($cliente_id, $snack_id, $empleado_id, $cantidad, $total, '$fecha_venta')";
        return $this->conexion->conectar()->query($query);
    }
}
