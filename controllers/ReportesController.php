<?php

require_once __DIR__ . '/../models/Reporte.php';

class ReportesController {
    private $reportesModel;

    public function __construct() {
        $this->reportesModel = new Reporte();
    }

    public function index() {
        include './views/reportes/index.php';
    }

    //ventas diarias
    public function venta_diaria() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fecha1 = $_POST['fecha1'];
            $ventas_boletos = $this->reportesModel->obtenerVentasBoletos($fecha1, $fecha1);
            $ventas_snacks = $this->reportesModel->obtenerVentasSnacks($fecha1, $fecha1);

            //Generación de EXCEL
            header("Pragma: public");
            header("Expires: 0");
            $filename = "VentasDiarias.xls";
            header("Content-type: application/x-msdownload");
            header("Content-Disposition: attachment; filename=$filename");
            header("Pragma: no-cache");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

            
            echo "<h1>Ventas Diarias</h1>";
            echo "<h2>Fecha: $fecha1</h2>";

            echo "<h3>Boletos</h3>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Fecha</th>";
            echo "<th>Producto</th>";
            echo "<th>Cantidad</th>";
            echo "<th>Total</th>";
            echo "</tr>";
            foreach ($ventas_boletos as $venta) {
                echo "<tr>";
                echo "<td>" . $venta['fecha_venta'] . "</td>";
                echo "<td>Boleto</td>";
                echo "<td>" . $venta['cantidad_tickets'] . "</td>";
                echo "<td>" . $venta['total'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";
            echo "<h3>Snacks</h3>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Fecha</th>";
            echo "<th>Producto</th>";
            echo "<th>Cantidad</th>";
            echo "<th>Total</th>";
            foreach ($ventas_snacks as $venta) {
                echo "<tr>";
                echo "<td>" . $venta['fecha_venta'] . "</td>";
                echo "<td>Snack</td>";
                echo "<td>" . $venta['cantidad'] . "</td>";
                echo "<td>" . $venta['total'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        
    }

    //listado de empleados
    public function listado_empleados() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $empleados = $this->reportesModel->obtenerEmpleados();
        
            //Generación de EXCEL
            header("Pragma: public");
            header("Expires: 0");
            $filename = "Listado_Empleados.xls";
            header("Content-type: application/x-msdownload");
            header("Content-Disposition: attachment; filename=$filename");
            header("Pragma: no-cache");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

            echo "<h1>Listado de Empleados</h1>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Correo</th>";
            echo "<th>Fecha de Contratación</th>";
            echo "<th>Salario</th>";
            echo "</tr>";
            foreach ($empleados as $empleado) {
                echo "<tr>";
                echo "<td>" . $empleado['nombre'] . "</td>";
                echo "<td>" . $empleado['cargo'] . "</td>";
                echo "<td>" . $empleado['fecha_contratacion'] . "</td>";
                echo "<td>" . $empleado['salario'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

        }
    }

    //listado de clientes
    public function listado_clientes() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $clientes = $this->reportesModel->obtenerClientes();
        
             //Generación de EXCEL
             header("Pragma: public");
             header("Expires: 0");
             $filename = "Listado_Clientes.xls";
             header("Content-type: application/x-msdownload");
             header("Content-Disposition: attachment; filename=$filename");
             header("Pragma: no-cache");
             header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

            echo "<h1>Listado de Clientes</h1>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Correo</th>";
            echo "<th>Fecha de Registro</th>";
            echo "<th>Telefono</th>";
            echo "</tr>";
            foreach ($clientes as $cliente) {
                echo "<tr>";
                echo "<td>" . $cliente['nombre'] . "</td>";
                echo "<td>" . $cliente['email'] . "</td>";
                echo "<td>" . $cliente['fecha_registro'] . "</td>";
                echo "<td>" . $cliente['telefono'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }


// Ventas
    public function Ventas() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $ventas_boletos = $this->reportesModel->obtenerVentasBoletos($fecha1, $fecha2);
            $ventas_snacks = $this->reportesModel->obtenerVentasSnacks($fecha1, $fecha2);
            
            //Generación de EXCEL
            header("Pragma: public");
            header("Expires: 0");
            $filename = "VentasPeriodo_".$fecha1."_".$fecha2.".xls";
            header("Content-type: application/x-msdownload");
            header("Content-Disposition: attachment; filename=$filename");
            header("Pragma: no-cache");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

        
            echo "<h1>Ventas Durante</h1>";
            echo "<h2>Fecha: $fecha1 - $fecha2</h2>";

            echo "<h3>Boletos</h3>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Fecha</th>";
            echo "<th>Producto</th>";
            echo "<th>Cantidad</th>";
            echo "<th>Total</th>";
            echo "</tr>";
            foreach ($ventas_boletos as $venta) {
                echo "<tr>";
                echo "<td>" . $venta['fecha_venta'] . "</td>";
                echo "<td>Boleto</td>";
                echo "<td>" . $venta['cantidad_tickets'] . "</td>";
                echo "<td>" . $venta['total'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";
            echo "<h3>Snacks</h3>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Fecha</th>";
            echo "<th>Producto</th>";
            echo "<th>Cantidad</th>";
            echo "<th>Total</th>";
            foreach ($ventas_snacks as $venta) {
                echo "<tr>";
                echo "<td>" . $venta['fecha_venta'] . "</td>";
                echo "<td>Snack</td>";
                echo "<td>" . $venta['cantidad'] . "</td>";
                echo "<td>" . $venta['total'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

        }
    }

// Consumo de Películas

    public function consumo_peliculas() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cantidad = $_POST['cantidad'];
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $consumo = $this->reportesModel->obtenerConsumoPeliculas($cantidad, $fecha1, $fecha2);
            
            //Generación de EXCEL
            header("Pragma: public");
            header("Expires: 0");
            $filename = "ConsumoDe_".$cantidad."peliculasDurante_".$fecha1."_".$fecha2.".xls";
            header("Content-type: application/x-msdownload");
            header("Content-Disposition: attachment; filename=$filename");
            header("Pragma: no-cache");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

            echo "<h1>Consumo de ".$cantidad." Películas o más </h1>";
            echo "<h2>Fecha: $fecha1 - $fecha2</h2>";

            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Correo</th>";
            echo "<th>Fecha de Registro</th>";
            echo "<th>Telefono</th>";
            echo "</tr>";
            foreach ($consumo as $cliente) {
                echo "<tr>";
                echo "<td>" . $cliente['nombre'] . "</td>";
                echo "<td>" . $cliente['email'] . "</td>";
                echo "<td>" . $cliente['fecha_registro'] . "</td>";
                echo "<td>" . $cliente['telefono'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }

// Productos Más Vendidos
    public function mas_vendidos() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $mas_vendidos = $this->reportesModel->obtenerMasVendidos($fecha1, $fecha2);

            //Generación de EXCEL
            header("Pragma: public");
            header("Expires: 0");
            $filename = "MasVendidos_".$fecha1."_".$fecha2.".xls";
            header("Content-type: application/x-msdownload");
            header("Content-Disposition: attachment; filename=$filename");
            header("Pragma: no-cache");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

            echo "<h1>5 Productos Más Vendidos</h1>";
            echo "<h2>Fecha: $fecha1 - $fecha2</h2>";

            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Producto</th>";
            echo "<th>Total Vendido</th>";
            echo "</tr>";
            foreach ($mas_vendidos as $producto) {
                echo "<tr>";
                echo "<td>" . $producto['producto'] . "</td>";
                echo "<td>" . $producto['total_vendido'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
           
        }
    }   


// Cartelera
    
    public function cartelera() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $cartelera = $this->reportesModel->obtenerCartelera($fecha1, $fecha2);
            
            //Generación de EXCEL
            header("Pragma: public");
            header("Expires: 0");
            $filename = "Cartelera_".$fecha1."_".$fecha2.".xls";
            header("Content-type: application/x-msdownload");
            header("Content-Disposition: attachment; filename=$filename");
            header("Pragma: no-cache");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

            echo "<h1>Cartelera Durante</h1>";
            echo "<h2>Fecha: $fecha1 - $fecha2</h2>";

            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>titulo</th>";
            echo "<th>descripcion</th>";
            echo "<th>duracion</th>";
            echo "<th>clasificacion</th>";
            echo "<th>lanzamiento</th>";
            echo "<th>genero</th>";
            echo "</tr>";

            foreach ($cartelera as $pelicula) {
                echo "<tr>";
                echo "<td>" . $pelicula['titulo'] . "</td>";
                echo "<td>" . $pelicula['descripcion'] . "</td>";
                echo "<td>" . $pelicula['duracion'] . "</td>";
                echo "<td>" . $pelicula['clasificacion'] . "</td>";
                echo "<td>" . $pelicula['lanzamiento'] . "</td>";
                echo "<td>" . $pelicula['genero'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

        }

    }


}

?>
