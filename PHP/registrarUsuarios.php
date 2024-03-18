<?php
// Iniciar la sesión
session_start();

// Recoger los datos del formulario
$usuario = isset($_GET['username']) ? $_GET['username'] : '';
$apellido1 = isset($_GET['apellido1']) ? $_GET['apellido1'] : '';
$apellido2 = isset($_GET['apellido2']) ? $_GET['apellido2'] : '';
$dni = isset($_GET['dni']) ? $_GET['dni'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';
$confirm_password = isset($_GET['confirm_password']) ? $_GET['confirm_password'] : '';

// Verificar que las contraseñas coinciden
if ($password !== $confirm_password) {
    die("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
}

// Conectar a la base de datos
$db_host = "localhost";
$db_nombre = "mundovinilo";
$db_usuario = "root";
$db_contra = "";

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

// Verificar si hay errores de conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Preparar la consulta SQL para insertar un nuevo usuario
$sql = "INSERT INTO usuarios (Nombre, Apellido1, Apellido2, DNI, Correo, Contraseña) VALUES (?, ?, ?, ?, ?, ?)";

// Verificar si la consulta se preparó correctamente
if ($stmt = mysqli_prepare($conexion, $sql)) {
    // Hashear la contraseña antes de guardarla en la base de datos (recomendado)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Vincular parámetros a la declaración preparada
    mysqli_stmt_bind_param($stmt, "ssssss", $usuario, $apellido1, $apellido2, $dni, $email, $hashed_password);

    // Ejecutar la declaración
if (mysqli_stmt_execute($stmt)) {
    // Establecer la variable de sesión con el nombre de usuario
    $_SESSION['username'] = $usuario;

    // Redirigir al usuario a la página de inicio
    header("Location: ../PHP/Index.php");
    exit(); // Asegurarse de que el script se detenga después de la redirección
} else {
    echo "Error al insertar datos: " . mysqli_error($conexion);
}


    // Cerrar la declaración
    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
