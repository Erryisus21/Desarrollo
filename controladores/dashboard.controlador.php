<?php

require_once "../modelos/dashboard.modelo.php";

class DashboardControlador {

    static public function ctrGetResumenDashboard() {
        return DashboardModelo::mdlGetResumenDashboard();
    }
}

?>