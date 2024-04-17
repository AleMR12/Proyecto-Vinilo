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
    <link rel="stylesheet" type="text/css" href="../CSS/DiscosPHP.css">

    <!-- Fuente de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300&display=swap" rel="stylesheet">

    <!-- Agregamos los archivos Javascript -->
    <script src="../JS/BarraNavegacionVertical.js"></script>
</head>

<body>

    <!-- Header de la página -->
    <header>
        <?php
        require('Header.php');
        ?>
    </header>

    <!-- Cuerpo de la página -->
    <main>
        <?php
        //Conexion a la BDD
        require('../../Mi-Proyecto/PHP/conexionBDD.php');

        // Consulta para obtener los datos de los discos de vinilo
        $sql = "SELECT * FROM discos";
        $result = $conexion->query($sql);
        ?>

        <!-- Le damos clase al div -->
        <div class="contenedor-discos">
            <?php
            // Verificar si se encontraron resultados
            if ($result->num_rows > 0) {
                // Iterar sobre cada fila de resultados
                while ($row = $result->fetch_assoc()) {
                    // Obtener la ruta relativa eliminando el directorio raíz del servidor
                    $ruta_relativa = str_replace($_SERVER['DOCUMENT_ROOT'], '', $row['Foto']);
                    // Mostrar la información de cada disco de vinilo
                    echo "<div class='disco-vinilo'>";
                    echo "<img src='" . $ruta_relativa . "' alt='" . $row['Nombre'] . "' class='imagen-disco'>";
                    echo "<div class='linea-vertical'></div>";
                    echo "<div class='info-disco'>";
                    echo "<h2>" . $row['Nombre'] . "</h2>";
                    echo "<p class='descripcion'>" . $row['Descripción'] . "</p> <br>";
                    echo "<p class='precio'>Precio: $" . $row['Precio'] . "</p>";
                    echo "<p class='existencias'>Existencias: " . $row['Existencias'] . "</p>";
                    // Botón para agregar al carrito
                    echo "<button class='btn-agregar-carrito' onclick='agregarAlCarrito(" . $row['ID'] . ")'>Agregar al carrito</button>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "No se encontraron discos de vinilo.";
            }
            ?>
        </div>

        <?php
        // Cerrar la conexión
        $conexion->close();
        ?>

        <!-- Aplicamos la función de clicado para abrir la barra de navegación vertical -->
        <ul>
            <li id="Menu" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                    </svg></a></li>
        </ul>

        <!-- Aplicamos la funcion de clicado para cerrar la barra de navegación vertical -->
        <div class="Cabecera2">
            <nav>
                <ul class="Sidebar">
                    <li id="CerrarMenu" onclick="closeSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                            </svg></a></li>
                    <li><a href="../PHP/cerrarSesion.php">CERRAR SESIÓN</a></li>
                    <li><a href="../PHP/Index.php">INICIO</a></li>
                    <li><a href="../HTML/Artistas.html">ARTISTAS</a></li>
                    <li><a href="../HTML/Conciertos.html">CONCIERTOS</a></li>
                    <li><a href="../HTML/Merchandising.html">MERCHANDISING</a></li>
                    <li><a href="../HTML/Contacto.html">CONTACTO</a></li>
                </ul>
            </nav>
        </div>

    </main>


    <!-- Footer de la página -->
    <footer>
        <?php
        require('footer.php');
        ?>
    </footer>

</body>

</html>