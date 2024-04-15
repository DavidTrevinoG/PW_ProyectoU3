<div class="container mt-4" id="secon">
    <h2>Alta de Película</h2>

    <form method="post" action="./index.php?controller=PeliculasController&action=alta">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="duracion">Duración:</label>
            <input type="text" name="duracion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="clasificacion">Clasificación:</label>
            <input type="text" name="clasificacion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lanzamiento">Lanzamiento:</label>
            <input type="date" name="lanzamiento" class="form-control" required>
        </div>       
        <div class="form-group">
            <label for="genero_id">Género:</label>
            <select name="genero_id" class="form-control" required>
                <?php foreach ($generos as $genero): ?>
                    <option value="<?php echo $genero['id']; ?>"><?php echo $genero['nombre']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
