<?php

require_once __DIR__ . '/../models/Empleado.php';


class EmpleadosController {
    private $empleadoModel;

    public function __construct() {
        $this->empleadoModel = new Empleado();
    }

    // Método para mostrar la lista de empleados
    public function index() {
        $empleados = $this->empleadoModel->obtenerEmpleados();
        include './views/empleados/index.php';
    }

    // Método para agregar un nuevo empleado
    public function agregar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $cargo = $_POST['cargo'];
            $salario = $_POST['salario'];
            $fecha_contratacion = $_POST['fecha_contratacion'];
            $this->empleadoModel->agregarEmpleado($nombre, $cargo, $salario, $fecha_contratacion);
            header("Location: index.php");
        } else {
            include './views/empleados/agregar.php';
        }
    }

    // Método para editar los detalles de un empleado
    public function editar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $cargo = $_POST['cargo'];
            $salario = $_POST['salario'];
            $fecha_contratacion = $_POST['fecha_contratacion'];
            $this->empleadoModel->actualizarEmpleado($id, $nombre, $cargo, $salario, $fecha_contratacion);
            header("Location: index.php");
        } else {
            $id = $_GET['id'];
            $empleado = $this->empleadoModel->obtenerEmpleadoPorId($id);
            include './views/empleados/editar.php';
        }
    }

    // Método para eliminar un empleado
    public function eliminar() {
        $id = $_GET['id'];
        $this->empleadoModel->eliminarEmpleado($id);
        header("Location: index.php");
    }
}
?>
