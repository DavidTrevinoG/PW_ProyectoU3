<div class="container mt-4">
    <h2>Listado de Ventas de Boletos</h2>

    <a href="./index.php?controller=VentasBoletosController&action=alta" class="btn btn-primary mb-3">Agregar Venta de Boletos</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID de Cliente</th>
            <th>ID de Película</th>
            <th>ID de Empleado</th>
            <th>Cantidad de Tickets</th>
            <th>Total</th>
            <th>Fecha de Venta</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($ventasBoletos as $ventaBoleto): ?>
            <tr>
                <td><?php echo $ventaBoleto['id']; ?></td>
                <td><?php echo $ventaBoleto['cliente_id']; ?></td>
                <td><?php echo $ventaBoleto['pelicula_id']; ?></td>
                <td><?php echo $ventaBoleto['empleado_id']; ?></td>
                <td><?php echo $ventaBoleto['cantidad_tickets']; ?></td>
                <td><?php echo $ventaBoleto['total']; ?></td>
                <td><?php echo $ventaBoleto['fecha_venta']; ?></td>
                <td>
                    <a href="./index.php?controller=VentasBoletosController&action=editar&id=<?php echo $ventaBoleto['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="./index.php?controller=VentasBoletosController&action=eliminar&id=<?php echo $ventaBoleto['id']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
