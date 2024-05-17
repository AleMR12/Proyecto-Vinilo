<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo</title>

    <!-- Ponemos el icono la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!--Agregamos el archivo de Javascript-->
    <script src="../JS/ScrollearImagenHorizontal.js"></script>
    <script src="../JS/BarraNavegacionVertical.js"></script>
    <script src="../JS/capturarTexto.js"></script>

</head>

<body>

    <!-- Header de la página -->

    <head>
        <?php
        require('Header.php');
        ?>
    </head>

    <!-- Cuerpo de la página -->
    <main>
        
        <!--mostPopular-->
        <p class="etiquetaCentral">most<span>Popular</span></p>

        <!-- Lista de discos dentro de Most Popular -->
        <div class="Lista-discos">
            <div class="scroller">
                <ul class="lista-horizontal">
                    <li class="item">
                        <a href="../PHP/discos.php">
                            <img src="../Imagenes/Vinilos/ViniloSinMiedoAVivir.png" alt="Disco 3">
                        </a>
                        <a href="../PHP/discos.php">
                            <p id="p1">Sin Miedo A Vivir</p>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../PHP/discos.php">
                            <img src="../Imagenes/Vinilos/ViniloElMadrileño.png" alt="Disco 3">
                        </a>
                        <a href="../PHP/discos.php">
                            <p id="p2">El Madrileño</p>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../PHP/discos.php">
                            <img src="../Imagenes/Vinilos/ViniloMoonlight.png" alt="Disco 3">
                        </a>
                        <a href="../PHP/discos.php">
                            <p id="p3">Moonlight</p>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../PHP/discos.php">
                            <img src="../Imagenes/Vinilos/ViniloTKT.png" alt="Disco 3">
                        </a>
                        <a href="../PHP/discos.php">
                            <p id="p4">TKT</p>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../PHP/discos.php">
                            <img src="../Imagenes/Vinilos/ViniloMaracuchoBueno.png" alt="Disco 3">
                        </a>
                        <a href="../PHP/discos.php">
                            <p id="p5">Maracucho Bueno Muere Chiquito</p>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../PHP/discos.php">
                            <img src="../Imagenes/Vinilos/ViniloHeroe.png" alt="Disco 3">
                        </a>
                        <a href="../PHP/discos.php">
                            <p id="p6">Héroe</p>
                        </a>
                    </li>
                    <li class="item">
                        <a href="../PHP/discos.php">
                            <img src="../Imagenes/Vinilos/ViniloYIPIYOU.png" alt="Disco 3">
                        </a>
                        <a href="../PHP/discos.php">
                            <p id="p6">YIPIYOU</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!--theLatest-->
        <p class="etiquetaCentral">the<span>Latest</span></p>

        <!--Lista de discos dentro de Most Popular-->
        <div class="Lista-discos">
            <div class="scroller" data-direction="right">
                <ul class="lista-horizontal">
                    <li class="item"><a href="../PHP/discos.php"><img src="../Imagenes/Vinilos/ViniloInkebrantable.png" alt="Disco 3"></a>
                        <p>Inkebrantable</p>
                    </li>
                    <li class="item"><a href="../PHP/discos.php"><img src="../Imagenes/Vinilos/ViniloMMCD.png" alt="Disco 3"></a>
                        <p>Me Muevo Con Dios</p>
                    </li>
                    <li class="item"><a href="../PHP/discos.php"><img src="../Imagenes/Vinilos/ViniloTiritirando.png" alt="Disco 3"></a>
                        <p>TIrititando</p>
                    </li>
                    <li class="item"><a href="../PHP/discos.php"><img src="../Imagenes/Vinilos/ViniloBBO.png" alt="Disco 3"></a>
                        <p>BBO</p>
                    </li>
                    <li class="item"><a href="../PHP/discos.php"><img src="../Imagenes/Vinilos/ViniloNombreDireccion.png" alt="Disco 3"></a>
                        <p>Nombre Dirección</p>
                    </li>
                    <li class="item"><a href="../PHP/discos.php"><img src="../Imagenes/Vinilos/ViniloBrownBoy.png" alt="Disco 3"></a>
                        <p>Brown Boy</p>
                    </li>
                    <li class="item"><a href="../PHP/discos.php"><img src="../Imagenes/Vinilos/ViniloLucesFuera.png" alt="Disco 3"></a>
                        <p>Luces Fuera</p>
                    </li>
                </ul>
            </div>
        </div>


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
                    <li><a href="../PHP/discos.php">DISCOS</a></li>
                    <li><a href="../PHP/artistas.php">ARTISTAS</a></li>
                    <li><a href="../PHP/Conciertos.php">CONCIERTOS</a></li>
                    <li><a href="../PHP/Merchandising.php">MERCHANDISING</a></li>
                    <li><a href="../PHPm/Contacto.php">CONTACTO</a></li>
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