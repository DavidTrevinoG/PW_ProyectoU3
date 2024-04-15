<div class="container mt-4" id="secon">
    <h1>Reportes</h1>

    <form method="post" action="./index.php?controller=ReportesController&action=listado_empleados">
        <button type="submit" class="btn btn-success">Listado de empleados</button>
    </form>
    <form method="post" action="./index.php?controller=ReportesController&action=listado_clientes">
        <button type="submit" class="btn btn-success">Listado de clientes</button>
    </form>

    <br>
    <form method="post" action="./index.php?controller=ReportesController&action=venta_diaria">
        <div class="form-group">
            <h2>Ventas Diarias</h2>
            <label for="fechas">Fecha:</label>
            <div name="fechas">
                <input type="date" name="fecha1" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Generar Reporte</button>
    </form>
    <br>
    <form method="post" action="./index.php?controller=ReportesController&action=Ventas">
        <div class="form-group">
            <h2>Ventas Durante el Periodo Especificado</h2>
            <label for="fechas">Rango de Fechas:</label>
            <div name="fechas">
                <input type="date" name="fecha1" class="form-control" required>
                <input type="date" name="fecha2" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Generar Reporte</button>
    </form>
    <br>
    <form method="post" action="./index.php?controller=ReportesController&action=consumo_peliculas">
        <div class="form-group">
        <h2>Registro de Consumo de Películas Durante el Periodo Especificado</h2>
            <div class="form-group">
                <label for="cantidad">Cantidad de Películas:</label>
                <input type="number" name="cantidad" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fecha1">Rango de Fechas:</label>
                <input type="date" name="fecha1" class="form-control" required>
                <input type="date" name="fecha2" class="form-control" required>
            </div> 
        </div>
        <button type="submit" class="btn btn-success">Generar Reporte</button>
    </form>
    <br>
    <form method="post" action="./index.php?controller=ReportesController&action=mas_vendidos">
        <div class="form-group">
        <h2>Productos Más Dendidos Durante el Periodo Especificado</h2>
            <div class="form-group">
                <label for="fecha1">Rango de Fechas:</label>
                <input type="date" name="fecha1" class="form-control" required>
                <input type="date" name="fecha2" class="form-control" required>
            </div> 
        </div>
        <button type="submit" class="btn btn-success">Generar Reporte</button>
    </form>
    <br>
    <form method="post" action="./index.php?controller=ReportesController&action=cartelera">
        <div class="form-group">
        <h2>Cartelera Durante el Periodo Especificado</h2>
            <div class="form-group">
                <label for="fecha1">Rango de Fechas:</label>
                <input type="date" name="fecha1" class="form-control" required>
                <input type="date" name="fecha2" class="form-control" required>
            </div> 
        </div>
        <button type="submit" class="btn btn-success">Generar Reporte</button>
    </form>


   

</div>
