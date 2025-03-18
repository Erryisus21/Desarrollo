<?php
// Configuración de la conexión a la base de datos
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "Polaris_date_base_v2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los productos
$sql = "SELECT id, codigo_producto, id_categoria_producto, descripcion_producto, precio_compra_producto, precio_venta_producto, utilidad, stock_producto, minimo_stock_producto, ventas_producto, fecha_creacion_producto, fecha_actualizacion_producto FROM Productos";
$resultado = $conn->query($sql);
$productos = ($resultado && $resultado->num_rows > 0) ? $resultado->fetch_all(MYSQLI_ASSOC) : [];

// Simulación de categorías (reemplazar con tu lógica real)
$categorias = [
    1 => 'Alimentos',
    // Agrega más categorías si las tienes
];

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Productos</title>
    <link rel="stylesheet" href="vistas/assets/dist/css/inventarios.css">
</head>
<body>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Inventarios/Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Productos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <!-- Botón para agregar un producto -->
            <button class="btn btn-success" onclick="window.location.href='controladores/agregar_producto.php'">➕ Agregar Producto</button>

            <!-- Mostrar mensaje de éxito -->
            <?php if (isset($_GET['success']) && $_GET['success'] == 'true') { ?>
                <div class="alert alert-success mt-3">
                    ✅ Producto agregado o actualizado con éxito.
                </div>
            <?php } ?>

            <!-- Mostrar mensaje de error -->
            <?php if (isset($_GET['success']) && $_GET['success'] == 'false') { ?>
                <div class="alert alert-danger mt-3">
                    ❌ Error al agregar o actualizar el producto. Intenta de nuevo.
                </div>
            <?php } ?>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">Lista de Productos</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="custom-table">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Categoría</th>
                                        <th>Descripción</th>
                                        <th>Precio Compra</th>
                                        <th>Precio Venta</th>
                                        <th>Utilidad</th>
                                        <th>Stock</th>
                                        <th>Stock Mínimo</th>
                                        <th>Ventas</th>
                                        <th>Fecha Creación</th>
                                        <th>Fecha Actualización</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($productos) > 0) { ?>
                                        <?php foreach ($productos as $row) { ?>
                                            <tr>
                                                <td><?= $row['codigo_producto'] ?></td>
                                                <td><?= $categorias[$row['id_categoria_producto']] ?? 'Desconocido' ?></td>
                                                <td><?= $row['descripcion_producto'] ?></td>
                                                <td>$<?= number_format($row['precio_compra_producto'], 2) ?></td>
                                                <td>$<?= number_format($row['precio_venta_producto'], 2) ?></td>
                                                <td>$<?= number_format($row['utilidad'], 2) ?></td>
                                                <td><?= $row['stock_producto'] ?></td>
                                                <td><?= $row['minimo_stock_producto'] ?></td>
                                                <td><?= $row['ventas_producto'] ?></td>
                                                <td><?= $row['fecha_creacion_producto'] ?></td>
                                                <td><?= $row['fecha_actualizacion_producto'] ?></td>
                                                <td>
                                                    <!-- Botón de editar -->
                                                    <button class="btn btn-primary" onclick="window.location.href='controladores/editar_producto.php?id=<?= $row['id'] ?>'">✏️ Editar</button>
                                                    <!-- Botón de eliminar -->
                                                    <button class="btn btn-danger" onclick="window.location.href='controladores/eliminar_producto.php?id=<?= $row['id'] ?>'">🗑️ Eliminar</button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <tr><td colspan="12">No hay productos registrados.</td></tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
