<?php
session_start(); // Inicia la sesión

// Destruye todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige al usuario a la página de inicio de sesión
header("Location: index.php"); // Reemplaza "index.php" con el nombre de tu página de inicio de sesión
exit;
?>