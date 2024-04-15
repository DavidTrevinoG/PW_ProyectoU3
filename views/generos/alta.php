<div class="container mt-4" id="secon">
    <h2>Alta de Género</h2>

    <form method="post" action="./index.php?controller=GenerosController&action=alta">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
