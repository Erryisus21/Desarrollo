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

// Obtener categorías desde la base de datos
$sql_categorias = "SELECT id_categoria, nombre_categoria FROM Categoria";
$result_categorias = $conn->query($sql_categorias);
$categorias = ($result_categorias && $result_categorias->num_rows > 0) ? $result_categorias->fetch_all(MYSQLI_ASSOC) : [];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="../vistas/assets/dist/css/formulario.css">
</head>
<body>
    <div class="container">
        <h2>Agregar Nuevo Producto</h2>
        <form action="procesar_agregar_producto.php" method="POST">
            <label for="codigo">Código del Producto:</label>
            <input type="text" id="codigo" name="codigo" required>

            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria" required>
                <option value="">Seleccione una categoría</option>
                <?php foreach ($categorias as $cat) { ?>
                    <option value="<?= $cat['id_categoria'] ?>"><?= $cat['nombre_categoria'] ?></option>
                <?php } ?>
            </select>

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" required>

            <label for="precio_compra">Precio Compra:</label>
            <input type="number" id="precio_compra" name="precio_compra" step="0.01" required>

            <label for="precio_venta">Precio Venta:</label>
            <input type="number" id="precio_venta" name="precio_venta" step="0.01" required>

            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" required>

            <label for="minimo_stock">Mínimo Stock:</label>
            <input type="number" id="minimo_stock" name="minimo_stock" required>

            <button type="submit" class="btn-submit">Agregar Producto</button>
            <a href="productos.php" class="btn-cancel">Cancelar</a>
        </form>
    </div>
</body>
</html>
