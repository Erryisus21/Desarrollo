<?php
session_start();

// Cargar el controlador correspondiente
require_once "controladores/AuthController.php";

// Obtener la acción desde el formulario o URL
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'login':
        $controller = new AuthController();
        $controller->login();
        break;
    case 'dashboard':
        include "vistas/plantilla.php";
        break;
    default:
        include "vistas/login.php";
        break;
}