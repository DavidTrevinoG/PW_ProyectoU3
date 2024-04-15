<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine - Sistema de Gestión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">CineXperience</a>
    </nav>

    <div class="container mt-4" id="mainpan">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?php echo((isset($_GET['controller']) && $_GET['controller'] == 'PeliculasController' || !isset($_GET['controller']))? 'active' : '') ?>" href="./index.php?controller=PeliculasController&action=index">Peliculas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo(isset($_GET['controller']) && $_GET['controller'] == 'GenerosController' ? 'active' : '') ?>" href="./index.php?controller=GenerosController&action=index">Géneros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo(isset($_GET['controller']) && $_GET['controller'] == 'ClientesController' ? 'active' : '') ?>" href="./index.php?controller=ClientesController&action=index">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo(isset($_GET['controller']) && $_GET['controller'] == 'EmpleadosController' ? 'active' : '') ?>" href="./index.php?controller=EmpleadosController&action=index">Empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo(isset($_GET['controller']) && $_GET['controller'] == 'VentasBoletosController' ? 'active' : '') ?>" href="./index.php?controller=VentasBoletosController&action=index">Ventas de Boletos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo(isset($_GET['controller']) && $_GET['controller'] == 'SnacksController' ? 'active' : '') ?>" href="./index.php?controller=SnacksController&action=index">Snacks</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo(isset($_GET['controller']) && $_GET['controller'] == 'VentasSnacksController' ? 'active' : '') ?>" href="./index.php?controller=VentasSnacksController&action=index">Ventas de Snack</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo(isset($_GET['controller']) && $_GET['controller'] == 'ReportesController' ? 'active' : '') ?>" href="./index.php?controller=ReportesController&action=index">Reportes</a>
            </li>
        </ul>

        <?php
            if (isset($_GET['controller']) && isset($_GET['action'])) {
                $controller = $_GET['controller'];
                $action = $_GET['action'];

                require_once "controllers/$controller.php";
                
                $controller = new $controller();

                $controller->$action();
            } else {
                require_once "controllers/PeliculasController.php";
                
                $peliculasController = new PeliculasController();

                $peliculasController->index();
            }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
