<?php

require_once __DIR__ . '/../models/Conexion.php';

class Reporte {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function obtenerVentasBoletos($fecha1, $fecha2) {
        $query = "SELECT * FROM ventas_boletos WHERE fecha_venta BETWEEN '$fecha1' AND '$fecha2'";
        $resultado = $this->conexion->conectar()->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerVentasSnacks($fecha1, $fecha2) {
        $query = "SELECT * FROM ventas_snacks WHERE fecha_venta BETWEEN '$fecha1' AND '$fecha2'";
        $resultado = $this->conexion->conectar()->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }    

    public function obtenerEmpleados() {
        $query = "SELECT * FROM empleados";
        $resultado = $this->conexion->conectar()->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerClientes() {
        $query = "SELECT * FROM clientes";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerConsumoPeliculas($cantidad, $fecha1, $fecha2) {
        $query = "SELECT id FROM clientes";
        $resultado = $this->conexion->conectar()->query($query);
        $resultado = $resultado->fetch_all(MYSQLI_ASSOC);
        $clientes_aprobados = [];

        foreach ($resultado as $cliente) {
            $id = $cliente['id'];
            $query = "SELECT COUNT(*) FROM ventas_boletos WHERE cliente_id = '$id' AND fecha_venta BETWEEN '$fecha1' AND '$fecha2'";
            $res = $this->conexion->conectar()->query($query);
            $res = $res->fetch_all(MYSQLI_ASSOC);

            if ($res[0]["COUNT(*)"] >= $cantidad) {
                array_push($clientes_aprobados, $id);
            }
        }

        $query = "SELECT * FROM clientes WHERE id IN (";

        if($clientes_aprobados == null){
            return null;
        }

        foreach ($clientes_aprobados as $id) {
            $query .= $id . ",";
        }
        $query = substr($query, 0, -1);
        $query .= ")";


        $resultado = $this->conexion->conectar()->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerMasVendidos($fecha1, $fecha2) {
        $query = "SELECT s.nombre as producto, SUM(vs.cantidad) AS total_vendido
        FROM ventas_snacks as vs JOIN snacks as s ON vs.producto = s.id
        WHERE fecha_venta BETWEEN '$fecha1' AND '$fecha2'
        GROUP BY producto
        ORDER BY total_vendido DESC
        LIMIT 5;";

        $resultado = $this->conexion->conectar()->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerCartelera($fecha1, $fecha2) {
        $query = "SELECT p.titulo as titulo, p.descripcion as descripcion, p.duracion as duracion, p.clasificacion as clasificacion, p.lanzamiento as lanzamiento, g.nombre as genero FROM peliculas as p JOIN generos as g ON p.genero_id = g.id WHERE p.lanzamiento BETWEEN '$fecha1' AND '$fecha2'";
        $resultado = $this->conexion->conectar()->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }


}

?>