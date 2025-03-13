<?php

require_once "../controladores/dashboard.controlador.php";
require_once "../modelos/dashboard.modelo.php";

class AjaxDashboard {

    public function getResumenDashboard() {
        $datos = DashboardControlador::ctrGetResumenDashboard();

        echo json_encode($datos);
    }
}

$datos = new AjaxDashboard();
$datos->getResumenDashboard();

?>