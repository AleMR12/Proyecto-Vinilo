<?php
if(isset($_FILES['imagen'])) {
    $archivos = $_FILES['imagen'];
    
    foreach($archivos['tmp_name'] as $key => $tmp_name) {
        $nombreArchivo = $archivos['name'][$key];
        $rutaDestino = "C:/Users/alema/Desktop/Imagenes/" . $nombreArchivo;
        
        if(move_uploaded_file($tmp_name, $rutaDestino)) {
            echo "La imagen '$nombreArchivo' se ha subido correctamente.<br>";
        } else {
            echo "Error al subir la imagen '$nombreArchivo'.<br>";
        }
    }
} else {
    echo "No se han seleccionado archivos.";
}
?>
