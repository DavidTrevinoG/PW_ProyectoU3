<div class="container mt-4" id="secon">
    <h2>Editar Género</h2>

    <form method="post" action="./index.php?controller=GenerosController&action=editar">
        <input type="hidden" name="id" value="<?php echo $genero['id']; ?>">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $genero['nombre']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
    </form>
</div>
