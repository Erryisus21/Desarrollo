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

// Verificar si se pasó un ID de producto
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los detalles del producto desde la base de datos
    $sql = "SELECT * FROM Productos WHERE id = $id";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $producto = $resultado->fetch_assoc();
    } else {
        die("Producto no encontrado.");
    }
} else {
    die("ID de producto no especificado.");
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="vistas/assets/dist/css/inventarios.css"> <!-- Ruta del CSS -->
</head>
<body>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Editar Producto</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="productos.php">Productos</a></li>
                    <li class="breadcrumb-item active">Editar Producto</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <form action="controladores/actualizar_producto.php" method="POST">
            <input type="hidden" name="id" value="<?= $producto['id'] ?>">

            <div class="form-group">
                <label for="codigo_producto">Código de Producto</label>
                <input type="text" id="codigo_producto" name="codigo_producto" class="form-control" value="<?= $producto['codigo_producto'] ?>" required>
            </div>

            <div class="form-group">
                <label for="descripcion_producto">Descripción</label>
                <input type="text" id="descripcion_producto" name="descripcion_producto" class="form-control" value="<?= $producto['descripcion_producto'] ?>" required>
            </div>

            <div class="form-group">
                <label for="precio_compra_producto">Precio de Compra</label>
                <input type="number" id="precio_compra_producto" name="precio_compra_producto" class="form-control" value="<?= $producto['precio_compra_producto'] ?>" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="precio_venta_producto">Precio de Venta</label>
                <input type="number" id="precio_venta_producto" name="precio_venta_producto" class="form-control" value="<?= $producto['precio_venta_producto'] ?>" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="stock_producto">Stock</label>
                <input type="number" id="stock_producto" name="stock_producto" class="form-control" value="<?= $producto['stock_producto'] ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</div>

</body>
</html>
