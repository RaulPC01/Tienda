<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
</head>
<body>

    <h1>Catálogo de Productos</h1>

    <!-- Opciones de ordenación -->
    <form action="" method="get">
        <label for="orden">Ordenar por:</label>
        <select name="orden" id="orden">
            <option value="precio_asc">Precio (ascendente)</option>
            <option value="precio_desc">Precio (descendente)</option>
        </select>
        <input type="submit" value="Ordenar">
    </form>

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

    // Obtener la opción de orden desde la URL
    $orden = isset($_GET['orden']) ? $_GET['orden'] : 'precio_asc';

    // Construir la consulta SQL según la opción de orden seleccionada
    if ($orden == 'precio_asc') {
        $sql = "SELECT * FROM Productos ORDER BY precio_unitario ASC";
    } elseif ($orden == 'precio_desc') {
        $sql = "SELECT * FROM Productos ORDER BY precio_unitario DESC";
    } else {
        // Opción predeterminada
        $sql = "SELECT * FROM Productos";
    }

    // Ejecutar la consulta y mostrar los resultados
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['nombre']} - Precio: {$row['precio_unitario']} ";
            echo "<a href='agregar_al_carrito.php?id={$row['id']}'>Añadir al carrito</a></li>";
        }
        echo "</ul>";
    } else {
        echo "No hay productos disponibles.";
    }
    echo "<form action='ver_carrito.php' method='post'>";
    echo "<button type='submit'>Ver Carrito</button>";
    echo "</form>";
    // Cerrar la conexión
    $conn->close();
    ?>

</body>
</html>
