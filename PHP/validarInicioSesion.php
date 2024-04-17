<?php
session_start();

// Verificar si se enviaron las credenciales
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['correo']) && isset($_POST['contrasena'])) {
    // Obtener los datos del formulario
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    //Conexion a la BDD
    require('../../Mi-Proyecto/PHP/conexionBDD.php');

    // Consulta para obtener el hash de la contraseña
    $sql = "SELECT * FROM usuarios WHERE Correo = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Obtener el usuario de la base de datos
        $row = $result->fetch_assoc();
        $hashContrasena = $row['Contraseña'];

        // Verificar si la contraseña ingresada coincide con la almacenada en la base de datos
        if (password_verify($contrasena, $hashContrasena)) {
            // Credenciales válidas, establecer sesión y redirigir al usuario
            $_SESSION['usuario'] = $row['Nombre'];
            header("Location: ../PHP/Index.php");
            exit();
        } else {
            // Contraseña incorrecta
            $_SESSION['mensaje_error'] = "Contraseña incorrecta.";
            header("Location: ../HTML/LogIn.html");
            exit();
        }
    } else {
        // Correo electrónico no registrado
        $_SESSION['mensaje_error'] = "Correo electrónico no registrado.";
        header("Location: ../HTML/LogIn.html");
        exit();
    }

} else {
    // Si no se enviaron las credenciales, redirigir al formulario de inicio de sesión
    header("Location: ../HTML/Index.html");
    exit();
}
?>
