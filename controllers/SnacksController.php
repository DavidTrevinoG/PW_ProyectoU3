<?php
require_once __DIR__ . '/../models/Snack.php';

class SnacksController {
    private $snackModel;

    public function __construct() {
        $this->snackModel = new Snack();
    }

    public function index() {
        $snacks = $this->snackModel->obtenerSnacks();
        include './views/snacks/index.php';
    }

    public function alta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $this->snackModel->insertarSnack($nombre, $precio);
            header("Location: index.php");
        } else {
            include './views/snacks/alta.php';
        }
    }

    public function editar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $this->snackModel->actualizarSnack($id, $nombre, $precio);
            header("Location: index.php");
        } else {
            $id = $_GET['id'];
            $snack = $this->snackModel->obtenerSnackPorId($id);
            include './views/snacks/editar.php';
        }
    }

    public function eliminar() {
        $id = $_GET['id'];
        $this->snackModel->eliminarSnack($id);
        header("Location: index.php");
    }
}
?>
