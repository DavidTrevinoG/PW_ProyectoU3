<div class="container mt-4" id="secon">
    <h2>Agregar Empleado</h2>

    <form method="post" action="./index.php?controller=EmpleadosController&action=agregar">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="salario">Salario:</label>
            <input type="number" name="salario" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_contratacion">Fecha de Contratación:</label>
            <input type="date" name="fecha_contratacion" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
