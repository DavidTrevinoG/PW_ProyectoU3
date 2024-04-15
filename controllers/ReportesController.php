<?php

require_once __DIR__ . '/../models/Reporte.php';

class ReportesController {
    private $reportesModel;

    public function __construct() {
        $this->reportesModel = new Reporte();
    }

// Lista de Clientes
    public function index() {
        include './views/reportes/index.php';
    }


}

?>
