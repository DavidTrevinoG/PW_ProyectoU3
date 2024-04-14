<div class="container mt-4">
    <h2>Alta de Venta de Boletos</h2>

    <form method="post" action="./index.php?controller=VentasBoletosController&action=alta">
        <div class="form-group">
            <label for="cliente_id">ID de Cliente:</label>
            <input type="number" name="cliente_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pelicula_id">ID de Película:</label>
            <input type="number" name="pelicula_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="empleado_id">ID de Empleado:</label>
            <input type="number" name="empleado_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cantidad_tickets">Cantidad de Tickets:</label>
            <input type="number" name="cantidad_tickets" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="total">Total:</label>
            <input type="text" name="total" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_venta">Fecha de Venta:</label>
            <input type="date" name="fecha_venta" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
