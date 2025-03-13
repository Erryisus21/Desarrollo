<?php

require_once "conexion.php";

class DashboardModelo{

    static public function mdlGetResumenDashboard(){
        $stmt = Conexion::conectar() ->prepare('call ObtenerResumenDashboard()');

        $stmt ->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
        
    }
}


?>
