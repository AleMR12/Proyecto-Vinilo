<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo - Discos</title>

    <!-- Ponemos el icono la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!-- Ponemos el icono para añadir al carrito y el play del discos -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Agregamos los archivos Javascript -->
    <script src="../JS/BarraNavegacionVertical.js"></script>
    <script src="../JS/carrito.js"></script>
    <script src="../JS/barraBusqueda.js"></script>
    <script src="../JS/capturarTexto.js"></script>


    <!-- Link para Spotify -->
    <script src="https://open.spotify.com/embed/iframe-api/v1" async></script>
    <script src="../JS/Spotify.js"></script>


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


        // Consulta para obtener los datos de los discos de vinilo junto con los nombres de los artistas
        $sql = "SELECT discos.*, artistas.Nombre_Artistico AS Nombre_Artista FROM discos INNER JOIN artistas ON discos.ID_Artista = artistas.ID";
        $result = $conexion->query($sql);

        // Obtener la URI de Spotify del primer disco de la base de datos para el album por defecto del iFrame de spotify
        $sql_uri = "SELECT EnlaceSpotify FROM discos LIMIT 1";
        $result_uri = $conexion->query($sql_uri);

        if ($result_uri->num_rows > 0) {
            $row_uri = $result_uri->fetch_assoc();
            $spotify_uri = $row_uri['EnlaceSpotify'];
        } else {
            // Si no se encuentra ninguna URI, utiliza una por defecto
            $spotify_uri = 'spotify:album:37i9dQZF1DXcd2Vmhfon1w'; // URI de ejemplo
        }

        ?>

        <div>
            <div id="miDiv" class="desplazable">
                <div id="embed-iframe">
                    <!-- Añadimos el Ifram de Spotify -->
                    <script type="text/javascript">
                        window.onSpotifyIframeApiReady = (IFrameAPI) => {
                            const element = document.getElementById('embed-iframe');
                            const options = {
                                width: '400px',
                                height: 'fit-content',
                                uri: '<?php echo $spotify_uri; ?>' // URI obtenida de la base de datos
                            };
                            const callback = (EmbedController) => {
                                document.querySelectorAll('.episode').forEach(
                                    episode => {
                                        episode.addEventListener('click', () => {
                                            EmbedController.loadUri(episode.dataset.spotifyId)
                                        });
                                    })
                            };
                            IFrameAPI.createController(element, options, callback);
                        };
                    </script>
                </div>
            </div>

            <!-- Contenedor Barra de busqueda -->
            <div class="contenedor-busqueda">
                <!-- Barra de búsqueda -->
                <input type="text" id="busqueda" placeholder="Buscar...">
            </div>

            <!-- Le damos clase al div -->
            <div class="contenedor-discos">


                <?php
                // Verificar si se encontraron resultados
                if ($result->num_rows > 0) {
                    // Iterar sobre cada fila de resultados
                    while ($row = $result->fetch_assoc()) {
                        // Obtener la ruta relativa eliminando el directorio raíz del servidor
                        $ruta_relativa = str_replace($_SERVER['DOCUMENT_ROOT'], '', $row['Foto']);

                        // Escapar los valores antes de usarlos en la consulta SQL
                        $id = mysqli_real_escape_string($conexion, $row['ID']);
                        $nombre = mysqli_real_escape_string($conexion, $row['Nombre']);
                        $descripcion = mysqli_real_escape_string($conexion, $row['Descripción']);
                        $precio = mysqli_real_escape_string($conexion, $row['Precio']);
                        $existencias = mysqli_real_escape_string($conexion, $row['Existencias']);
                        $id_artista = mysqli_real_escape_string($conexion, $row['ID_Artista']);
                        $nombre_artista = mysqli_real_escape_string($conexion, $row['Nombre_Artista']);
                        $enlace_spotify = mysqli_real_escape_string($conexion, $row['EnlaceSpotify']);

                        // Mostrar la información de cada disco de vinilo
                        echo "<div class='disco-vinilo' data-id-artista='" . $row['ID_Artista'] . "'>";
                        echo "<img src='" . $ruta_relativa . "' alt='" . $row['Nombre'] . "' class='imagen-disco'>";
                        echo "<div class='linea-vertical'></div>";
                        echo "<div class='info-disco'>";
                        echo "<h2 class='nombre-disco'>" . $row['Nombre'] . "</h2>";
                        echo "<p class='descripcion'>" . $row['Descripción'] . "</p> <br>";
                        echo "<div class='precio-existencias'>";
                        echo "<p class='nombre-artista'><b>Artista: </b>" . $row['Nombre_Artista'] . "</p>";
                        echo "<p class='precio'><b>Precio:</b> €" . $row['Precio'] . "</p>";
                        echo "<p class='existencias'><b>Existencias:</b> " . $row['Existencias'] . "</p>";
                        echo "</div>";
                        // Formulario para agregar al carrito y botón "Saber más"
                        echo "<div class='botones'>";

                        // Botón de Spotify dinámico
                        // Reemplaza el botón por el icono play_arrow dentro de un botón
                        echo "<div class='episodes'>";
                        echo "<button class='episode' data-spotify-id='" . $row['EnlaceSpotify'] . "'>";
                        echo "<span class='material-symbols-outlined'>play_arrow</span>";
                        echo "</button>";
                        echo "</div>";


                        // Verificar si hay una sesión iniciada antes de mostrar el botón "Añadir al carrito"
                        if (isset($_SESSION['usuario'])) {
                            echo "<form method='post' action='agregar_al_carrito.php' class='agregar-carrito-form'>";
                            echo "<input type='hidden' name='product_id' value='" . $row['ID'] . "'>"; // Aquí se incluye el ID del producto
                            echo "<input type='hidden' name='product_name' value='" . $row['Nombre'] . "'>";
                            echo "<input type='hidden' name='product_price' value='" . $row['Precio'] . "'>";
                            echo "<button type='submit' name='add_to_cart' class='carrito-btn'>";
                            echo "<span class='material-symbols-outlined'>add_shopping_cart</span>";
                            echo "</button>";
                            echo "</form>";
                        }
                        echo "<a href='../PHP/Artistas.php' class='enlace-saber-mas'><button type='submit' name='saber_mas' class='saber-mas'>Saber más..</button></a>";
                        echo "</div>"; // Fin de div 'botones'
                        echo "</div>"; // Fin de div 'info-disco'
                        echo "</div>"; // Fin de div 'disco-vinilo'
                    }
                } else {
                    echo "No se encontraron discos de vinilo.";
                }
                ?>
            </div>

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
                    <?php
                    if (isset($_SESSION['usuario'])) {
                        echo "<li><a href='../PHP/cerrarSesion.php'>CERRAR SESIÓN</a></li>";
                    } else {
                        echo "<li><a href='../HTML/LogIn.html'>INICIAR SESIÓN</a></li>";
                    }
                    ?>
                    <li><a href="../PHP/Index.php">INICIO</a></li>
                    <li><a href="../PHP/Artistas.php">ARTISTAS</a></li>
                    <li><a href="../PHP/Conciertos.php">CONCIERTOS</a></li>
                    <li><a href="../PHP/Merchandising.php">MERCHANDISING</a></li>
                    <li><a href="../PHP/Contacto.php">CONTACTO</a></li>
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