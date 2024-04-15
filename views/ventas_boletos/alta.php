<div class="container mt-4" id="secon">
    <h2>Alta de Venta de Boletos</h2>

    <form method="post" action="./index.php?controller=VentasBoletosController&action=alta">
        <div class="form-group">
            <label for="cliente_id">Cliente:</label>
            <select name="cliente_id" class="form-control" required>
                <?php foreach ($clientes as $cliente): ?>
                    <option value="<?php echo $cliente['id']; ?>"><?php echo $cliente['nombre']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="pelicula_id">Película:</label>
            <select name="pelicula_id" class="form-control" required>
                <?php foreach ($peliculas as $pelicula): ?>
                    <option value="<?php echo $pelicula['id']; ?>"><?php echo $pelicula['titulo']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="empleado_id">Empleado:</label>
            <select name="empleado_id" class="form-control" required>
                <?php foreach ($empleados as $empleado): ?>
                    <option value="<?php echo $empleado['id']; ?>"><?php echo $empleado['nombre']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad_tickets">Cantidad de Boletos:</label>
            <input type="number" name="cantidad_tickets" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="total">Total:</label>
            <input type="number" name="total" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_venta">Fecha de Venta:</label>
            <input type="date" name="fecha_venta" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
