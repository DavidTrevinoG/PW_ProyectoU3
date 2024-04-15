<div class="container mt-4" id="secon">
    <h2>Editar Venta de Boletos</h2>

    <form method="post" action="./index.php?controller=VentasBoletosController&action=editar">
        <input type="hidden" name="id" value="<?php echo $ventaBoleto['id']; ?>">
        <div class="form-group">
            <label for="cliente_id">Cliente:</label>
            <select name="cliente_id" class="form-control" required>
                <?php foreach ($clientes as $cliente): ?>
                    <option value="<?php echo $cliente['id']; ?>" <?php echo ($cliente['id'] == $ventaBoleto['cliente_id']) ? 'selected' : ''; ?>>
                        <?php echo $cliente['nombre']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="pelicula_id">Película:</label>
            <select name="pelicula_id" class="form-control" required>
                <?php foreach ($peliculas as $pelicula): ?>
                    <option value="<?php echo $pelicula['id']; ?>" <?php echo ($pelicula['id'] == $ventaBoleto['pelicula_id']) ? 'selected' : ''; ?>>
                        <?php echo $pelicula['titulo']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="empleado_id">Empleado:</label>
            <select name="empleado_id" class="form-control" required>
                <?php foreach ($empleados as $empleado): ?>
                    <option value="<?php echo $empleado['id']; ?>" <?php echo ($empleado['id'] == $ventaBoleto['empleado_id']) ? 'selected' : ''; ?>>
                        <?php echo $empleado['nombre']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad_tickets">Cantidad de Boletos:</label>
            <input type="number" name="cantidad_tickets" class="form-control" value="<?php echo $ventaBoleto['cantidad_tickets']; ?>" required>
        </div>
        <div class="form-group">
            <label for="total">Total:</label>
            <input type="number" name="total" class="form-control" value="<?php echo $ventaBoleto['total']; ?>" required>
        </div>
        <div class="form-group">
            <label for="fecha_venta">Fecha de Venta:</label>
            <input type="date" name="fecha_venta" class="form-control" value="<?php echo $ventaBoleto['fecha_venta']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
    </form>
</div>
