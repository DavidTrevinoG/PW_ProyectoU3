<div class="container mt-4" id="secon">
    <h2>Editar Snack</h2>

    <form method="post" action="./index.php?controller=SnacksController&action=editar">
        <input type="hidden" name="id" value="<?php echo $snack['id']; ?>">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $snack['nombre']; ?>" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" name="precio" class="form-control" value="<?php echo $snack['precio']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
    </form>
</div>
