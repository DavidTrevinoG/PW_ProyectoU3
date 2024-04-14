<?php
require_once __DIR__ . '/../models/Pelicula.php';

class PeliculasController {
    private $peliculaModel, $generos;

    public function __construct() {
        $this->peliculaModel = new Pelicula();
    }

// Lista de Peliculas
    public function index() {
        $peliculas = $this->peliculaModel->obtenerPeliculas();
        $generos = $this->peliculaModel->obtenerGeneros();
        include './views/peliculas/index.php';
    }

// Nueva Pelicula
    public function alta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $duracion = $_POST['duracion'];
            $clasificacion = $_POST['clasificacion'];
            $lanzamiento = $_POST['lanzamiento'];
            $genero_id = $_POST['genero_id'];
            $this->peliculaModel->insertarPelicula($titulo, $descripcion, $duracion, $clasificacion, $lanzamiento, $genero_id);
            header("Location: ./index.php?controller=PeliculasController&action=index");
        } else {
            $generos = $this->peliculaModel->obtenerGeneros();
            include './views/peliculas/alta.php';
        }
    }

// Modificar Pelicula
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
            header("Location: ./index.php?controller=PeliculasController&action=index");
        } else {
            $id = $_GET['id'];
            $pelicula = $this->peliculaModel->obtenerPeliculaPorId($id);
            $generos = $this->peliculaModel->obtenerGeneros();
            include './views/peliculas/editar.php';
        }
    }

// Eliminar Pelicula
    public function eliminar() {
        $id = $_GET['id'];
        $this->peliculaModel->eliminarPelicula($id);
        header("Location: ./index.php?controller=PeliculasController&action=index");
    }
}
?>
