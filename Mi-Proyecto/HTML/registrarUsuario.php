<?php
// Verificar si se han enviado datos mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurar la conexión a la base de datos (cambiar los valores según tu configuración)
    $servername = "localhost";
    $dbname = "mundovinilo";
    $username = "";
    $password = "";
    

    // Crear conexión
    $conn = new mysqli($servername, $dbname, $username, $password);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Recuerda que este es solo un ejemplo, asegúrate de realizar un hash seguro de la contraseña antes de guardarla en la base de datos

    // Preparar la consulta SQL para insertar un nuevo usuario
    $sql = "INSERT INTO usuario (nombre_usuario, correo_electronico, contraseña) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
