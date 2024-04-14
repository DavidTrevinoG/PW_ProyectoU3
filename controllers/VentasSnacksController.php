<?php

require_once './models/VentaSnack.php';

class VentasSnacksController
{
    private $ventaSnackModel;

    public function __construct() {
        $this->ventaSnackModel = new VentaSnack();
    }

    public function index() {    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cliente_id = $_POST['cliente_id'];
            $snack_id = $_POST['snack_id'];
            $empleado_id = $_POST['empleado_id'];
            $cantidad = $_POST['cantidad'];
            $total = $_POST['total'];

            $this->ventaSnackModel->registrarVenta($cliente_id, $snack_id, $empleado_id, $cantidad, $total);
            header("Location: index.php?controller=VentasSnacksController&action=index");
        } else {
            include './views/ventas_snacks/alta.php';
        }
    }
}
