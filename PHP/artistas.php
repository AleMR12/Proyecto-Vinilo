<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo - Artistas</title>

    <!-- Link para los archivos CSS -->
    <link rel="stylesheet" href="../CSS/IndexPHP.css">

    <!-- Ponemos el icono la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!-- Ponemos el icono para añadir al carrito -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Agregamos los archivos Javascript -->
    <script src="../JS/BarraNavegacionVertical.js"></script>
    <script src="../JS/carrito.js"></script>
    <script src="../JS/barraBusqueda.js"></script>
</head>

<body>

    <!-- Header de la página -->
    <header>
        <?php require('Header.php'); ?>
    </header>

    <!-- Cuerpo de la página -->
    <main>
        <?php
        //Conexion a la BDD
        require('../../Mi-Proyecto/PHP/conexionBDD.php');

        // Consulta para obtener los datos de los artistas
        $sql = "SELECT * FROM artistas";
        $result = $conexion->query($sql);
        ?>

        <div class="contenedor-artistas">
            <?php
            // Verificar si se encontraron resultados
            if ($result->num_rows > 0) {
                // Obtener el número total de filas
                $total_rows = $result->num_rows;
                // Variable para rastrear el índice actual
                $current_index = 1;
                // Iterar sobre cada fila de resultados
                while ($row = $result->fetch_assoc()) {
                    // Obtener la ruta relativa eliminando el directorio raíz del servidor
                    $ruta_relativa = str_replace($_SERVER['DOCUMENT_ROOT'], '', $row['Foto']);
                    // Determinar si es el último elemento
                    $es_ultimo = ($current_index == $total_rows) ? 'ultimo-artista' : '';
            ?>
                    <!-- Contenedor del artista -->
                    <div class="artista <?php echo $es_ultimo; ?>">
                        <img src="<?php echo $ruta_relativa; ?>" alt="<?php echo $row['Nombre_Artistico']; ?>" class="imagen-artistas">
                        <div class="info-artista">
                            <!-- Modificamos el enlace del nombre del artista para incluir el nombre como parámetro en la URL -->
                            <h2 class="nombre-artista"><a href="../PHP/discos.php?artista=<?php echo urlencode($row['Nombre_Artistico']); ?>" class="enlace-artistas-discos"><?php echo $row['Nombre_Artistico']; ?></a></h2>
                            <p class="nombre-completo"><i><?php echo $row['Nombre'] . ' ' . $row['Apellido1'] . ' ' . $row['Apellido2']; ?></i></p>
                            <p class="descripcion-artista"><?php echo $row['Descripción'] ?></p>
                        </div>
                    </div>


            <?php
                    // Incrementar el índice actual
                    $current_index++;
                }
            } else {
                echo "No se encontraron artistas.";
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
                    <?php
                    if (isset($_SESSION['usuario'])) {
                        echo "<li><a href='../PHP/cerrarSesion.php'>CERRAR SESIÓN</a></li>";
                    } else {
                        echo "<li><a href='../HTML/LogIn.html'>INICIAR SESIÓN</a></li>";
                    }
                    ?>
                    <li><a href="../PHP/Index.php">INICIO</a></li>
                    <li><a href="../PHP/discos.php">DISCOS</a></li>
                    <li><a href="../HTML/Conciertos.html">CONCIERTOS</a></li>
                    <li><a href="../HTML/Merchandising.html">MERCHANDISING</a></li>
                    <li><a href="../HTML/Contacto.html">CONTACTO</a></li>
                </ul>
            </nav>
        </div>
    </main>

    <!-- Footer de la página -->
    <footer>
        <?php require('footer.php'); ?>
    </footer>

    <script>
        const images = document.querySelectorAll('.imagen-artistas');

        images.forEach(image => {
            // Agregar un evento de mouseover para cambiar la sombra al pasar el ratón por encima
            image.addEventListener('mouseover', function() {
                image.style.boxShadow = '0 0 20px rgba(0, 0, 0, 0.5)';
            });

            // Agregar un evento de mouseout para cambiar la sombra al retirar el ratón
            image.addEventListener('mouseout', function() {
                image.style.boxShadow = '0 0 0 rgba(0, 0, 0, 0)';
            });
        });
    </script>
</body>

</html>