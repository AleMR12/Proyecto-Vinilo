<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo - Conciertos</title>

    <!-- Ponemos el icono la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!-- Agregamos los archivos JS -->
    <script src="../JS/BarraNavegacionVertical.js"></script>

    <!-- Añadimos los archivos CSS -->
    <link rel="stylesheet" href="../CSS/Conciertos.css">
</head>

<body>

    <!-- Header de la página -->
    <header>
        <?php
        require('Header.php');
        ?>
    </header>

    <main>
        <main id="main-container">
            <!-- Sección de Conciertos -->
            <section id="concerts-section">
                <h2>Próximos Conciertos</h2>
                <hr class="custom-hr">
                <div class="concert">
                    <div class="concert-details">
                        <h3>Concierto en Madrid</h3>
                        <p><strong>Fecha:</strong> 15 de Junio, 2024</p>
                        <p><strong>Lugar:</strong> Estadio Santiago Bernabéu, Madrid</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    </div>
                </div>
                <div class="concert">
                    <div class="concert-details">
                        <h3>Concierto en Barcelona</h3>
                        <p><strong>Fecha:</strong> 22 de Julio, 2024</p>
                        <p><strong>Lugar:</strong> Palau Sant Jordi, Barcelona</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    </div>
                </div>
                <div class="concert">
                    <div class="concert-details">
                        <h3>Concierto en Valencia</h3>
                        <p><strong>Fecha:</strong> 5 de Agosto, 2024</p>
                        <p><strong>Lugar:</strong> Ciudad de las Artes y las Ciencias, Valencia</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    </div>
                </div>
            </section>


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
                    <li><a href="../PHP/artistas.php">ARTISTAS</a></li>
                    <li><a href="../PHP/merchandising.php">MERCHANDISING</a></li>
                    <li><a href="../PHP/contacto.php">CONTACTO</a></li>
                </ul>
            </nav>
        </div>

    </main>

    <footer>
        <?php require('footer.php'); ?>
    </footer>

</body>