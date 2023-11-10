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

// Función para realizar el login
if (isset($_POST['enviando'])) {
    // Obtener datos del formulario
    $email = $_POST['e-mail'];
    $contrasena = md5($_POST['con']);
    
    // Función para realizar el login
    function login($email, $contrasena, $conn) {
        $email = mysqli_real_escape_string($conn, $email);
        $contrasena = mysqli_real_escape_string($conn, $contrasena);

        // Consulta SQL para verificar las credenciales
        $sql = "SELECT * FROM Usuarios WHERE email='$email' AND contrasena='$contrasena'";
        $result = $conn->query($sql);

        // Verificar si las credenciales son válidas
        if ($result->num_rows > 0) {
            // Usuario autenticado, puedes redirigir o realizar otras acciones
            echo "Login exitoso";
            header("Location: paginaProductos.php");
        } else {
            // Usuario no autenticado
            echo "Error de login";
        }
    }

    // Ejemplo de uso de la función de login
    login($email, $contrasena, $conn);
}

// Verificar si se está registrando un nuevo usuario
if(isset($_POST['registrar'])){
    // Obtener datos del formulario
    $nick = $_POST['nick'];
    $email = $_POST['email'];
    $contrasena = md5($_POST['contrasena']);
    $confirmacion_contrasena = md5($_POST['confirmacion_contrasena']);

    // Función para registrar un nuevo usuario
    function registrarUsuario($nick, $email, $contrasena, $confirmacion_contrasena, $conn) {
        // Verificar si las contraseñas coinciden
        if ($contrasena != $confirmacion_contrasena) {
            echo "Las contraseñas no coinciden.";
            return;
        }

        // Escapar caracteres especiales y realizar la consulta
        $nick = mysqli_real_escape_string($conn, $nick);
        $email = mysqli_real_escape_string($conn, $email);

        // Verificar si el usuario ya existe
        $sql_verificar = "SELECT * FROM Usuarios WHERE email='$email'";
        $result_verificar = $conn->query($sql_verificar);

        if ($result_verificar->num_rows > 0) {
            echo "El usuario ya existe.";
            return;
        }

        // Insertar el nuevo usuario en la base de datos
        $sql_insertar = "INSERT INTO Usuarios (nick, email, contrasena) VALUES ('$nick', '$email', '$contrasena')";
        if ($conn->query($sql_insertar) === TRUE) {
            echo "Registro exitoso. Ahora puedes iniciar sesión.";
        } else {
            echo "Error al registrar el usuario: " . $conn->error;
        }
    }

    // Ejemplo de uso de la función para registrar un nuevo usuario
    registrarUsuario($nick, $email, $contrasena, $confirmacion_contrasena, $conn);
}

// Cerrar la conexión al finalizar
$conn->close();
?>
