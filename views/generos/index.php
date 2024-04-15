<div class="container mt-4" id="secon">
    <h2>Listado de Géneros</h2>

    <a href="./index.php?controller=GenerosController&action=alta" class="btn btn-primary mb-3">Agregar Género</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generos as $genero): ?>
            <tr>
                <td><?php echo $genero['id']; ?></td>
                <td><?php echo $genero['nombre']; ?></td>
                <td>
                    <a href="./index.php?controller=GenerosController&action=editar&id=<?php echo $genero['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="./index.php?controller=GenerosController&action=eliminar&id=<?php echo $genero['id']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
