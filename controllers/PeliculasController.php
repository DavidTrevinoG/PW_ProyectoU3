<?php
require_once __DIR__ . '/../models/Pelicula.php';

class PeliculasController {
    private $peliculaModel;

    public function __construct() {
        $this->peliculaModel = new Pelicula();
    }

    public function index() {
        $peliculas = $this->peliculaModel->obtenerPeliculas();
        include './views/peliculas/index.php';
    }

    public function alta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $duracion = $_POST['duracion'];
            $clasificacion = $_POST['clasificacion'];
            $lanzamiento = $_POST['lanzamiento'];
            $genero_id = $_POST['genero_id'];
            $this->peliculaModel->insertarPelicula($titulo, $descripcion, $duracion, $clasificacion, $lanzamiento, $genero_id);
            header("Location: index.php");
        } else {
            include './views/peliculas/alta.php';
        }
    }

    public function editar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $duracion = $_POST['duracion'];
            $clasificacion = $_POST['clasificacion'];
            $lanzamiento = $_POST['lanzamiento'];
            $genero_id = $_POST['genero_id'];
            $this->peliculaModel->actualizarPelicula($id, $titulo, $descripcion, $duracion, $clasificacion, $lanzamiento, $genero_id);
            header("Location: index.php");
        } else {
            $id = $_GET['id'];
            $pelicula = $this->peliculaModel->obtenerPeliculaPorId($id);
            include './views/peliculas/editar.php';
        }
    }

    public function eliminar() {
        $id = $_GET['id'];
        $this->peliculaModel->eliminarPelicula($id);
        header("Location: index.php");
    }
}
?>
