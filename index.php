<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Cine</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Cine XYZ</a>
    </nav>

    <div class="container mt-4">
        <?php
            // Controlador predeterminado y acción predeterminada
            $defaultController = 'EmpleadosController';
            $defaultAction = 'index';

            // Verificar si se proporciona un controlador y una acción en la URL
            if (isset($_GET['controller']) && isset($_GET['action'])) {
                $controllerName = $_GET['controller'];
                $action = $_GET['action'];
            } else {
                // Si no se proporciona, utilizar el controlador y acción predeterminados
                $controllerName = $defaultController;
                $action = $defaultAction;
            }

            // Incluir el controlador correspondiente
            require_once "controllers/$controllerName.php";

            // Crear una instancia del controlador y llamar a la acción correspondiente
            $controller = new $controllerName();
            $controller->$action();
        ?>
    </div>

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
