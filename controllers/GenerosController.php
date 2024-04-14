<?php
require_once __DIR__ . '/../models/Genero.php';

class GenerosController {
    private $generoModel;

    public function __construct() {
        $this->generoModel = new Genero();
    }

// Lista Generos
    public function index() {
        $generos = $this->generoModel->obtenerGeneros();
        include './views/generos/index.php';
    }

// Alta Generos
    public function alta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $this->generoModel->insertarGenero($nombre);
            header("Location: ./index.php?controller=GenerosController&action=index");
        } else {
            include './views/generos/alta.php';
        }
    }

// Editar Generos
    public function editar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $this->generoModel->actualizarGenero($id, $nombre);
            header("Location: ./index.php?controller=GenerosController&action=index");
        } else {
            $id = $_GET['id'];
            $genero = $this->generoModel->obtenerGeneroPorId($id);
            include './views/generos/editar.php';
        }
    }

// Eliminar Generos
    public function eliminar() {
        $id = $_GET['id'];
        $this->generoModel->eliminarGenero($id);
        header("Location: ./index.php?controller=GenerosController&action=index");
    }
}
?>
