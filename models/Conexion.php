<?php

class Conexion {
    private $host = "localhost";
    private $user = "root"; // Cambiar por tu usuario de la base de datos
    private $password = ""; // Cambiar por tu contraseña de la base de datos
    private $database = "cine_db";

    public function conectar() {
        $conexion = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }
}
?>
