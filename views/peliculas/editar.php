<div class="container mt-4">
    <h2>Editar Película</h2>

    <form method="post" action="./index.php?controller=PeliculasController&action=editar">
        <input type="hidden" name="id" value="<?php echo $pelicula['id']; ?>">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" class="form-control" value="<?php echo $pelicula['titulo']; ?>" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" rows="3" required><?php echo $pelicula['descripcion']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="duracion">Duración:</label>
            <input type="text" name="duracion" class="form-control" value="<?php echo $pelicula['duracion']; ?>" required>
        </div>
        <div class="form-group">
            <label for="clasificacion">Clasificación:</label>
            <input type="text" name="clasificacion" class="form-control" value="<?php echo $pelicula['clasificacion']; ?>" required>
        </div>
        <div class="form-group">
            <label for="lanzamiento">Lanzamiento:</label>
            <input type="date" name="lanzamiento" class="form-control" value="<?php echo $pelicula['lanzamiento']; ?>" required>
        </div>
        <div class="form-group">
            <label for="genero_id">ID de Género:</label>
            <input type="number" name="genero_id" class="form-control" value="<?php echo $pelicula['genero_id']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
    </form>
</div>
