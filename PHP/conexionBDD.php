<?php

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

?>