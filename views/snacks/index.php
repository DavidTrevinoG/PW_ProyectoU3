<div class="container mt-4" id="secon">
    <h2>Listado de Snacks</h2>

    <a href="./index.php?controller=SnacksController&action=alta" class="btn btn-primary mb-3">Agregar Snack</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($snacks as $snack): ?>
            <tr>
                <td><?php echo $snack['id']; ?></td>
                <td><?php echo $snack['nombre']; ?></td>
                <td><?php echo $snack['precio']; ?></td>
                <td>
                    <a href="./index.php?controller=SnacksController&action=editar&id=<?php echo $snack['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="./index.php?controller=SnacksController&action=eliminar&id=<?php echo $snack['id']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
