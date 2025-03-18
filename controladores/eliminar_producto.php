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

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Iniciar una transacción para garantizar la integridad de las operaciones
    $conn->begin_transaction();

    try {
        // 1. Eliminar el producto de la base de datos
        $sql_eliminar = "DELETE FROM Productos WHERE id = ?";
        $stmt = $conn->prepare($sql_eliminar);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        // 2. Restar 1 al id_categoria_producto de los demás productos
        $sql_actualizar_categoria = "UPDATE Productos SET id_categoria_producto = id_categoria_producto - 1 WHERE id_categoria_producto > 1";
        $conn->query($sql_actualizar_categoria);

        // Confirmar la transacción si todo es exitoso
        $conn->commit();

        // Redirigir a la lista de productos con un mensaje de éxito
        header("Location: ../productos.php?success=true");
    } catch (Exception $e) {
        // Si ocurre un error, revertir los cambios realizados
        $conn->rollback();

        // Redirigir a la lista de productos con un mensaje de error
        header("Location: ../productos.php?success=false");
    }
} else {
    echo "ID de producto no especificado.";
}

$conn->close();
?>
