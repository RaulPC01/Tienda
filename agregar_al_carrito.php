<?php
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

// Obtener el ID del producto desde la URL
$producto_id = $_GET['id'];

// Insertar el producto en la tabla CarritoCompra
$sql_insertar_carrito = "INSERT INTO CarritoCompra (producto_id, cantidad, precio_total) VALUES ('$producto_id', 1, (SELECT precio_unitario FROM Productos WHERE id = '$producto_id'))";

// Ejecutar la consulta de inserción en la tabla CarritoCompra
if ($conn->query($sql_insertar_carrito) === TRUE) {
    echo "Producto agregado al carrito con éxito.";
} else {
    echo "Error al agregar el producto al carrito: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

// Redirigir de nuevo a la página de productos
header("Location: paginaProductos.php");
exit();
?>
