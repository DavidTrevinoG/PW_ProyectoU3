<?php
require_once './models/Conexion.php';

class Pelicula {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function obtenerPeliculas() {
        $query = "SELECT * FROM peliculas";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }   
    public function obtenerGeneros() {
        $query = "SELECT * FROM generos";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }


    public function insertarPelicula($titulo, $descripcion, $duracion, $clasificacion, $lanzamiento, $genero_id) {
        $query = "INSERT INTO peliculas (titulo, descripcion, duracion, clasificacion, lanzamiento, genero_id) VALUES ('$titulo', '$descripcion', '$duracion', '$clasificacion', '$lanzamiento', '$genero_id')";
        return $this->conexion->conectar()->query($query);
    }

    public function obtenerPeliculaPorId($id) {
        $query = "SELECT * FROM peliculas WHERE id = $id";
        $resultado = $this->conexion->conectar()->query($query);

        return $resultado->fetch_assoc();
    }

    public function actualizarPelicula($id, $titulo, $descripcion, $duracion, $clasificacion, $lanzamiento, $genero_id) {
        $query = "UPDATE peliculas SET titulo = '$titulo', descripcion = '$descripcion', duracion = '$duracion', clasificacion = '$clasificacion', lanzamiento = '$lanzamiento', genero_id = '$genero_id' WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }

    public function eliminarPelicula($id) {
        $query = "DELETE FROM peliculas WHERE id = $id";
        return $this->conexion->conectar()->query($query);
    }
}
?>
