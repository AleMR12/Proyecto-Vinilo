<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo</title>

    <!-- Ponemos el icono la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!--Agregamos los CSS-->
    <link rel="stylesheet" type="text/css" href="../CSS/Index.css">
    <link rel="stylesheet" type="text/css" href="../CSS/@Keyframes.css">
    <link rel="stylesheet" type="text/css" href="../CSS/@Media.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Reset.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Cabecera.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Discos.css">

    <!-- Fuente de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300&display=swap" rel="stylesheet">

    <!-- Agregamos los archivos Javascript -->
    <script src="../JS/BarraNavegacionVertical.js"></script>
</head>

<body>
    <header>
        <!--Creamos nuestra cabecera-->
        <div class="Cabecera">

            <!--Ponemos el logo a la izquierda-->
            <a href="../HTML/Index.html" class="aLogo"><img src="../Imagenes/Extras/Logo.png" class="Logo" alt="Logo"></a>
            <!--Creamos la primera barra de navegacion que es horizontal-->
            <nav class="Nav">
                <ul>
                    <li><a href="../HTML/Discos.html">DISCOS</a></li>
                    <li><a href="../HTML/Artistas.html">ARTISTAS</a></li>
                    <li><a href="../HTML/Conciertos.html">CONCIERTOS</a></li>
                    <li><a href="../HTML/Merchandising.html">MERCHANDISING</a></li>
                    <li><a href="../HTML/Contacto.html">CONTACTO</a></li>
                </ul>
            </nav>

            <!-- Creamos el icono de iniciar sesion -->
            <a href="../HTML/Log In.html" class="enlace-imagen">
                <img src="../Imagenes/Extras/LogIn.png" alt="Iniciar Sesión">
            </a>
        </div>
    </header>

    <main>

        <?php
        //Conexion a la BDD
        require('../../Mi-Proyecto/PHP/conexionBDD.php');

        // Consulta para obtener los datos de los discos de vinilo
        $sql = "SELECT * FROM discos";
        $result = $conexion->query($sql);

        // Verificar si se encontraron resultados
        if ($result->num_rows > 0) {
            // Iterar sobre cada fila de resultados
            while ($row = $result->fetch_assoc()) {
                // Obtener la ruta relativa eliminando el directorio raíz del servidor
                $ruta_relativa = str_replace($_SERVER['DOCUMENT_ROOT'], '', $row['Foto']);

                // Mostrar la información de cada disco de vinilo
                echo "<div>";
                echo "<img src='" . $ruta_relativa . "' alt='" . $row['Nombre'] . "' class='imagen-disco'>";

                echo "<p>Precio: $" . $row['Precio'] . "</p>";
                echo "<p>Existencia: " . $row['Existencias'] . "</p>";
                echo "<p>Descripción: " . $row['Descripción'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No se encontraron discos de vinilo.";
        }



        // Cerrar la conexión 
        $conexion->close();
        ?>

    </main>

</body>

</html>