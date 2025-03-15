<?php
require_once "modelos/UserModel.php";

class AuthController {
    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Instanciar el modelo para verificar credenciales
            $userModel = new UserModel();
            $user = $userModel->validateUser($username, $password);

            if ($user) {
                // Guardar el usuario en sesión
                $_SESSION['username'] = $user['username'];
                header("Location: index.php?action=dashboard");
                exit();
            } else {
                $error = "Usuario o contraseña incorrectos.";
                include "vistas/login.php"; // Volver al login con el error
            }
        }
    }
}
