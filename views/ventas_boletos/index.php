<div class="container mt-4" id="secon">
    <h2>Listado de Ventas de Boletos</h2>

    <a href="./index.php?controller=VentasBoletosController&action=alta" class="btn btn-primary mb-3">Agregar Venta de Boletos</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Película</th>
            <th>Empleado</th>
            <th>Cantidad de Boletos</th>
            <th>Total</th>
            <th>Fecha de Venta</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($ventasBoletos as $ventaBoleto): ?>
            <tr>
                <td><?php echo $ventaBoleto['id']; ?></td>
                <td><?php echo obtenerNombreCliente($ventaBoleto['cliente_id'], $clientes); ?></td>
                <td><?php echo obtenerTituloPelicula($ventaBoleto['pelicula_id'], $peliculas); ?></td>
                <td><?php echo obtenerNombreEmpleado($ventaBoleto['empleado_id'], $empleados); ?></td>
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

function obtenerTituloPelicula($pelicula_id, $peliculas) {
    foreach ($peliculas as $pelicula) {
        if ($pelicula['id'] === $pelicula_id) {
            return $pelicula['titulo'];
        }
    }
    return 'Desconocida';
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
