<div class="container mt-4">
    <h2>Editar Venta de Boletos</h2>

    <form method="post" action="./index.php?controller=VentasBoletosController&action=editar">
        <input type="hidden" name="id" value="<?php echo $ventaBoleto['id']; ?>">
        <div class="form-group">
            <label for="cliente_id">ID de Cliente:</label>
            <input type="number" name="cliente_id" class="form-control" value="<?php echo $ventaBoleto['cliente_id']; ?>" required>
        </div>
        <div class="form-group">
            <label for="pelicula_id">ID de Película:</label>
            <input type="number" name="pelicula_id" class="form-control" value="<?php echo $ventaBoleto['pelicula_id']; ?>" required>
        </div>
        <div class="form-group">
            <label for="empleado_id">ID de Empleado:</label>
            <input type="number" name="empleado_id" class="form-control" value="<?php echo $ventaBoleto['empleado_id']; ?>" required>
        </div>
        <div class="form-group">
            <label for="cantidad_tickets">Cantidad de Tickets:</label>
            <input type="number" name="cantidad_tickets" class="form-control" value="<?php echo $ventaBoleto['cantidad_tickets']; ?>" required>
        </div>
        <div class="form-group">
            <label for="total">Total:</label>
            <input type="text" name="total" class="form-control" value="<?php echo $ventaBoleto['total']; ?>" required>
        </div>
        <div class="form-group">
            <label for="fecha_venta">Fecha de Venta:</label>
            <input type="date" name="fecha_venta" class="form-control" value="<?php echo $ventaBoleto['fecha_venta']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
    </form>
</div>
