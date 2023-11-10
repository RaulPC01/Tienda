<?php
// Inicia la sesión para acceder a la información del usuario
session_start();



// Configuración de la base de datos
$servername = "localhost";
$username = "Raul";
$password = "i@GkZvK]MjGFb][5";
$dbname = "tienda";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}



// Consulta para obtener los productos en el carrito del usuario
$sql = "SELECT p.nombre, p.precio_unitario FROM CarritoCompra c
        JOIN Productos p ON c.producto_id = p.id";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Carrito</title>
</head>
<body>

    <h1>Carrito de Compras</h1>

    <?php
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['nombre']} - Precio: {$row['precio_unitario']}</li>";
        }
        echo "</ul>";
    } else {
        echo "El carrito está vacío.";
    }
    ?>

    <a href="paginaProductos.php">Volver al catálogo</a>

</body>
</html>

<?php
// Cerrar la conexión
$conn->close();
?>
