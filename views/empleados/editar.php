<div class="container mt-4" id="secon">
    <h2>Editar Empleado</h2>

    <form method="post" action="./index.php?controller=EmpleadosController&action=editar">
        <input type="hidden" name="id" value="<?php echo $empleado['id']; ?>">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $empleado['nombre']; ?>" required>
        </div>
        <div class="form-group">
            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" class="form-control" value="<?php echo $empleado['cargo']; ?>" required>
        </div>
        <div class="form-group">
            <label for="salario">Salario:</label>
            <input type="number" name="salario" class="form-control" value="<?php echo $empleado['salario']; ?>" required>
        </div>
        <div class="form-group">
            <label for="fecha_contratacion">Fecha de Contratación:</label>
            <input type="date" name="fecha_contratacion" class="form-control" value="<?php echo $empleado['fecha_contratacion']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
    </form>
</div>
