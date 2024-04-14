<?php

require_once __DIR__ . '/../models/Cliente.php';

class ClientesController {
    private $clienteModel;

    public function __construct() {
        $this->clienteModel = new Cliente();
    }

// Lista de Clientes
    public function index() {
        $clientes = $this->clienteModel->obtenerClientes();
        include './views/clientes/index.php';
    }

// Registo de Clientes
    public function alta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $this->clienteModel->insertarCliente($nombre, $correo, $telefono);
            header("Location: ./index.php?controller=ClientesController&action=index");
        } else {
            include './views/clientes/alta.php';
        }
    }

// Actualizacion de Clientes
    public function editar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $this->clienteModel->actualizarCliente($id, $nombre, $correo, $telefono);
            header("Location: ./index.php?controller=ClientesController&action=index");
        } else {
            $id = $_GET['id'];
            $cliente = $this->clienteModel->obtenerClientePorId($id);
            include './views/clientes/editar.php';
        }
    }

// Baja de Clientes
    public function eliminar() {
        $id = $_GET['id'];
        $this->clienteModel->eliminarCliente($id);
        header("Location: ./index.php?controller=ClientesController&action=index");
    }
}

?>
