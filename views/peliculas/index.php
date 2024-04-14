<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cine</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Sistema de Cine</a>
</nav>

<div class="container mt-4">
    <h2>Listado de Películas</h2>

    <a href="./index.php?controller=PeliculasController&action=alta" class="btn btn-primary mb-3">Agregar Película</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Duración</th>
            <th>Clasificación</th>
            <th>Lanzamiento</th>
            <th>Género</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($peliculas as $pelicula): ?>
            <tr>
                <td><?php echo $pelicula['id']; ?></td>
                <td><?php echo $pelicula['titulo']; ?></td>
                <td><?php echo $pelicula['descripcion']; ?></td>
                <td><?php echo $pelicula['duracion']; ?></td>
                <td><?php echo $pelicula['clasificacion']; ?></td>
                <td><?php echo $pelicula['lanzamiento']; ?></td>
                <td><?php echo obtenerNombreGenero($pelicula['genero_id'], $generos); ?></td>
                <td>
                    <a href="./index.php?controller=PeliculasController&action=editar&id=<?php echo $pelicula['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="./index.php?controller=PeliculasController&action=eliminar&id=<?php echo $pelicula['id']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
function obtenerNombreGenero($genero_id, $generos) {
    foreach ($generos as $genero) {
        if ($genero['id'] === $genero_id) {
            return $genero['nombre'];
        }
    }
    return 'Desconocido';
}
?>
