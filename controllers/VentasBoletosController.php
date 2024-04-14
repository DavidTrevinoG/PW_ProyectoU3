<?php
require_once __DIR__ . '/../models/VentaBoletos.php';

class VentasBoletosController {
    private $ventaBoletosModel;

    public function __construct() {
        $this->ventaBoletosModel = new VentaBoletos();
    }

    public function index() {
        $ventasBoletos = $this->ventaBoletosModel->obtenerVentasBoletos();
        include './views/ventas_boletos/index.php';
    }

    public function alta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cliente_id = $_POST['cliente_id'];
            $pelicula_id = $_POST['pelicula_id'];
            $empleado_id = $_POST['empleado_id'];
            $cantidad_tickets = $_POST['cantidad_tickets'];
            $total = $_POST['total'];
            $fecha_venta = $_POST['fecha_venta'];
            $this->ventaBoletosModel->insertarVentaBoleto($cliente_id, $pelicula_id, $empleado_id, $cantidad_tickets, $total, $fecha_venta);
            header("Location: index.php");
        } else {
            include './views/ventas_boletos/alta.php';
        }
    }

    public function editar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $cliente_id = $_POST['cliente_id'];
            $pelicula_id = $_POST['pelicula_id'];
            $empleado_id = $_POST['empleado_id'];
            $cantidad_tickets = $_POST['cantidad_tickets'];
            $total = $_POST['total'];
            $fecha_venta = $_POST['fecha_venta'];
            $this->ventaBoletosModel->actualizarVentaBoleto($id, $cliente_id, $pelicula_id, $empleado_id, $cantidad_tickets, $total, $fecha_venta);
            header("Location: index.php");
        } else {
            $id = $_GET['id'];
            $ventaBoleto = $this->ventaBoletosModel->obtenerVentaBoletoPorId($id);
            include './views/ventas_boletos/editar.php';
        }
    }

    public function eliminar() {
        $id = $_GET['id'];
        $this->ventaBoletosModel->eliminarVentaBoleto($id);
        header("Location: index.php");
    }
}
?>
