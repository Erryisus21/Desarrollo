<?php

class Conexion {

    static public function conectar() {
        try {
            // Parámetros de conexión corregidos
            $host = "XAMPP Local";
            $dbname = "polaris_date_base_v2"; // Verifica que sea el nombre correcto de la BD
            $username = "root";
            $password = ""; // Si tienes contraseña, agrégala aquí

            // Crear la conexión con PDO
            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

            // Configurar PDO para manejar errores en modo excepción
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            exit("Falló la conexión: " . $e->getMessage()); // Mejor manejo de errores
        }
    }
}

?>
