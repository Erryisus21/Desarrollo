<?php
// Configuración de la conexión a la base de datos
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "Polaris_date_base_v2";

// Intentar la conexión
$conn = @new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión falló
if ($conn->connect_error) {
    $conexion_activa = false;
    $categorias = []; // Si no hay conexión, se muestra una tabla vacía
} else {
    $conexion_activa = true;
    // Consulta SQL para obtener las categorías
    $sql = "SELECT id_categoria, nombre_categoria, aplica_peso, fecha_creacion_categoria, fecha_actualizacion_categoria FROM Categoria";
    $result = $conn->query($sql);
    $categorias = ($result && $result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías de Productos</title>
    <link rel="stylesheet" href="assets/dist/css/categorias.css"> <!-- Archivo CSS separado -->
</head>
<body>

    <!-- Header de la página -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categoría de Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Categoría de Productos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="content">
        <div class="container-fluid">
            <button class="btn btn-success" onclick="window.location.href='controladores/agregar_categoria.php'">➕ Agregar Categoría</button>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">Lista de Categorías</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="custom-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Aplica Peso</th>
                                        <th>Fecha Creación</th>
                                        <th>Fecha Actualización</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!$conexion_activa) {
                                        echo "<tr><td colspan='6' class='alert-warning'>⚠️ No se pudo conectar a la base de datos. Mostrando tabla vacía.</td></tr>";
                                    } elseif (count($categorias) > 0) {
                                        foreach ($categorias as $row) {
                                            echo "<tr>";
                                            echo "<td>" . $row["id_categoria"] . "</td>";
                                            echo "<td>" . $row["nombre_categoria"] . "</td>";
                                            echo "<td>" . ($row["aplica_peso"] ? 'Sí' : 'No') . "</td>";
                                            echo "<td>" . $row["fecha_creacion_categoria"] . "</td>";
                                            echo "<td>" . $row["fecha_actualizacion_categoria"] . "</td>";
                                            echo "<td>
                                                    <button class='btn btn-primary' onclick=\"window.location.href='controladores/editar_categoria.php?id=" . $row["id_categoria"] . "'\">✏️ Editar</button>
                                                    <button class='btn btn-danger' onclick=\"window.location.href='controladores/eliminar_categoria.php?id=" . $row["id_categoria"] . "'\">🗑️ Eliminar</button>
                                                </td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No hay categorías registradas.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if ($conexion_activa) {
        $conn->close();
    }
    ?>
</body>
</html>
