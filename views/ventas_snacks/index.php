<div class="container mt-4" id="secon">
    <h2>Listado de Ventas de Snacks</h2>

    <a href="./index.php?controller=VentasSnacksController&action=alta" class="btn btn-primary mb-3">Agregar Venta de Snacks</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Empleado</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Fecha de Venta</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($ventasSnacks as $ventaSnack): ?>
            <tr>
                <td><?php echo $ventaSnack['id']; ?></td>
                <td><?php echo obtenerNombreCliente($ventaSnack['cliente_id'], $clientes); ?></td>
                <td><?php echo obtenerNombreSnack($ventaSnack['producto'], $snacks); ?></td>
                <td><?php echo obtenerNombreEmpleado($ventaSnack['empleado_id'], $empleados); ?></td>
                <td><?php echo $ventaSnack['cantidad']; ?></td>
                <td><?php echo $ventaSnack['total']; ?></td>
                <td><?php echo $ventaSnack['fecha_venta']; ?></td>
                <td>
                    <a href="./index.php?controller=VentasSnacksController&action=editar&id=<?php echo $ventaSnack['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="./index.php?controller=VentasSnacksController&action=eliminar&id=<?php echo $ventaSnack['id']; ?>" class="btn btn-danger">Eliminar</a>
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
function obtenerNombreCliente($cliente_id, $clientes) {
    foreach ($clientes as $cliente) {
        if ($cliente['id'] === $cliente_id) {
            return $cliente['nombre'];
        }
    }
    return 'Desconocido';
}

function obtenerNombreSnack($snack_id, $snacks) {
    foreach ($snacks as $snack) {
        if ($snack['id'] === $snack_id) {
            return $snack['nombre'];
        }
    }
    return 'Desconocido';
}

function obtenerNombreEmpleado($empleado_id, $empleados) {
    foreach ($empleados as $empleado) {
        if ($empleado['id'] === $empleado_id) {
            return $empleado['nombre'];
        }
    }
    return 'Desconocido';
}
?>
