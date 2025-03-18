<?php
// Configuración de la conexión a la base de datos
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "Polaris_date_base_v2";

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir datos del formulario
$codigo = $_POST['codigo'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$stock = $_POST['stock'];
$minimo_stock = $_POST['minimo_stock'];
$fecha_creacion = date("Y-m-d H:i:s");

// Calcular la utilidad (precio venta - precio compra)
$utilidad = $precio_venta - $precio_compra;

// Insertar datos en la base de datos
$sql = "INSERT INTO Productos (codigo_producto, id_categoria_producto, descripcion_producto, precio_compra_producto, precio_venta_producto, utilidad, stock_producto, minimo_stock_producto, fecha_creacion_producto)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sisddddds", $codigo, $categoria, $descripcion, $precio_compra, $precio_venta, $utilidad, $stock, $minimo_stock, $fecha_creacion);

if ($stmt->execute()) {
    // Redirige a productos.php con un mensaje de éxito
    header("Location:productos.php?success=true");
    exit();
} else {
    // Redirige a productos.php con un mensaje de error
    header("Location:productos.php?success=false");
    exit();
}

$stmt->close();
$conn->close();
?>
