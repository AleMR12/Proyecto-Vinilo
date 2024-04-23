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

// Funcion para obtener el nombre del artista desde el ID. Este archivo se va a aplicar en discos.php
function obtenerNombreArtista($id_artista, $conexion) {
    // Consulta para obtener el nombre del artista
    $sql = "SELECT Nombre_Artistico FROM artistas WHERE ID = $id_artista";
    $result = $conexion->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['Nombre_Artistico'];
    } else {
        return "Desconocido";
    }
}



?>