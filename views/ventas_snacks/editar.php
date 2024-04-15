<div class="container mt-4" id="secon">
    <h2>Editar Venta de Snacks</h2>

    <form method="post" action="./index.php?controller=VentasSnacksController&action=editar">
        <input type="hidden" name="id" value="<?php echo $ventaSnack['id']; ?>">
        <div class="form-group">
            <label for="cliente_id">Cliente:</label>
            <select name="cliente_id" class="form-control" required>
                <?php foreach ($clientes as $cliente): ?>
                    <option value="<?php echo $cliente['id']; ?>" <?php echo ($cliente['id'] == $ventaSnack['cliente_id']) ? 'selected' : ''; ?>>
                        <?php echo $cliente['nombre']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="snack_id">Producto:</label>
            <select name="snack_id" class="form-control" required>
                <?php foreach ($snacks as $snack): ?>
                    <option value="<?php echo $snack['id']; ?>" <?php echo ($snack['id'] == $ventaSnack['nombre']) ? 'selected' : ''; ?>>
                        <?php echo $snack['nombre']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div> 
        <div class="form-group">
            <label for="empleado_id">Empleado:</label>
            <select name="empleado_id" class="form-control" required>
                <?php foreach ($empleados as $empleado): ?>
                    <option value="<?php echo $empleado['id']; ?>" <?php echo ($empleado['id'] == $ventaSnack['empleado_id']) ? 'selected' : ''; ?>>
                        <?php echo $empleado['nombre']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad de Boletos:</label>
            <input type="number" name="cantidad" class="form-control" value="<?php echo $ventaSnack['cantidad']; ?>" required>
        </div>
        <div class="form-group">
            <label for="total">Total:</label>
            <input type="number" name="total" class="form-control" value="<?php echo $ventaSnack['total']; ?>" required>
        </div>
        <div class="form-group">
            <label for="fecha_venta">Fecha de Venta:</label>
            <input type="date" name="fecha_venta" class="form-control" value="<?php echo $ventaSnack['fecha_venta']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
    </form>
</div>
