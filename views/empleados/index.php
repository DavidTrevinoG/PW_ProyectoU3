<div class="container mt-4" id="secon">
    <h2>Listado de Empleados</h2>

    <a href="./index.php?controller=EmpleadosController&action=agregar" class="btn btn-primary mb-3">Agregar Empleado</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cargo</th>
            <th>Salario</th>
            <th>Fecha Contratación</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($empleados as $empleado): ?>
            <tr>
                <td><?php echo $empleado['id']; ?></td>
                <td><?php echo $empleado['nombre']; ?></td>
                <td><?php echo $empleado['cargo']; ?></td>
                <td><?php echo $empleado['salario']; ?></td>
                <td><?php echo $empleado['fecha_contratacion']; ?></td>
                <td>
                    <a href="./index.php?controller=EmpleadosController&action=editar&id=<?php echo $empleado['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="./index.php?controller=EmpleadosController&action=eliminar&id=<?php echo $empleado['id']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
