<?php
require_once __DIR__ . '/../models/VentaSnack.php';

class VentasSnacksController
{
    private $ventaSnackModel, $clientes, $snacks, $empleados;

    public function __construct() {
        $this->ventaSnackModel = new VentaSnack();
    }

    public function index() {
        $ventasSnacks = $this->ventaSnackModel->obtenerVentasSnacks();
        $clientes = $this->ventaSnackModel->obtenerClientes();
        $snacks = $this->ventaSnackModel->obtenerSnacks();
        $empleados = $this->ventaSnackModel->obtenerEmpleados();
        include './views/ventas_snacks/index.php';
    }

    public function alta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cliente_id = $_POST['cliente_id'];
            $snack_id = $_POST['snack_id'];
            $empleado_id = $_POST['empleado_id'];
            $cantidad = $_POST['cantidad'];
            $total = $_POST['total'];
            $fecha_venta = $_POST['fecha_venta'];
            $this->ventaSnackModel->registrarVenta($cliente_id, $snack_id, $empleado_id, $cantidad, $total, $fecha_venta);
            header("Location: index.php?controller=VentasSnacksController&action=index");
        } else {
            $clientes = $this->ventaSnackModel->obtenerClientes();
            $snacks = $this->ventaSnackModel->obtenerSnacks();
            $empleados = $this->ventaSnackModel->obtenerEmpleados();
            include './views/ventas_snacks/alta.php';
        }
    }

    public function editar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $cliente_id = $_POST['cliente_id'];
            $snack_id = $_POST['snack_id'];
            $empleado_id = $_POST['empleado_id'];
            $cantidad = $_POST['cantidad'];
            $total = $_POST['total'];
            $fecha_venta = $_POST['fecha_venta'];
            $this->ventaSnackModel->actualizarVentaSnack($id, $cliente_id, $snack_id, $empleado_id, $cantidad, $total, $fecha_venta);
            header("Location: index.php?controller=VentasSnacksController&action=index");
        } else {
            $id = $_GET['id'];
            $ventaSnack = $this->ventaSnackModel->obtenerVentaSnackPorId($id);
            $clientes = $this->ventaSnackModel->obtenerClientes();
            $snacks = $this->ventaSnackModel->obtenerSnacks();
            $empleados = $this->ventaSnackModel->obtenerEmpleados();
            include './views/ventas_snacks/editar.php';
        }
    }

    public function eliminar() {
        $id = $_GET['id'];
        $this->ventaSnackModel->eliminarVentaSnack($id);
        header("Location: index.php?controller=VentasSnacksController&action=index");
    }
}
