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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $codigo_producto = $_POST['codigo_producto'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $precio_compra_producto = $_POST['precio_compra_producto'];
    $precio_venta_producto = $_POST['precio_venta_producto'];
    $stock_producto = $_POST['stock_producto'];

    // Validar los datos antes de actualizar
    if (!empty($id) && !empty($codigo_producto) && !empty($descripcion_producto) && is_numeric($precio_compra_producto) && is_numeric($precio_venta_producto) && is_numeric($stock_producto)) {

        // Query para actualizar el producto
        $sql = "UPDATE Productos SET 
                    codigo_producto = '$codigo_producto',
                    descripcion_producto = '$descripcion_producto',
                    precio_compra_producto = '$precio_compra_producto',
                    precio_venta_producto = '$precio_venta_producto',
                    stock_producto = '$stock_producto'
                WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            // Redirigir a productos con mensaje de éxito
            header("Location: ../productos.php?success=true");
            exit();
        } else {
            // Redirigir a productos con mensaje de error
            header("Location: ../productos.php?success=false");
            exit();
        }
    } else {
        // Si falta algún dato, redirigir con error
        header("Location: ../productos.php?success=false");
        exit();
    }
}

$conn->close();
?>
