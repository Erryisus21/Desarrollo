<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="vistas/assets/dist/css/login.styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Sistema de Facturación</h2>
        <h3>Cafetería Polaris</h3>

        <form method="POST" action="index.php?action=login">
            <div class="input-container">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" placeholder="Ingrese su usuario" required>
            </div>
            <div class="input-container">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
            <?php if (isset($error)) { echo "<p class='error-message'>$error</p>"; } ?>
        </form>
        <div class="footer">© 2024 Sistema de Facturación - Cafetería Polaris</div>
    </div>
</body>
</html>

