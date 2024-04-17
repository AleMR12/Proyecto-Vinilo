<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo</title>

    <!-- Ponemos el icono la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!--Agregamos los CSS-->
    <link rel="stylesheet" type="text/css" href="../CSS/Index.css">
    <link rel="stylesheet" type="text/css" href="../CSS/IndexPHP.css">
    <link rel="stylesheet" type="text/css" href="../CSS/@Keyframes.css">
    <link rel="stylesheet" type="text/css" href="../CSS/@Media.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Reset.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Cabecera.css">

    <!-- Fuente de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300&display=swap" rel="stylesheet">

    <!--Agregamos el archivo de Javascript-->
    <script src="../JS/ScrollearImagenHorizontal.js"></script>
    <script src="../JS/BarraNavegacionVertical.js"></script>

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

        <!--Lista de discos dentro de Most Popular-->
        <div class="Lista-discos">
            <div class="scroller" data-direction="left">
                <ul class="lista-horizontal">
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloSinMiedoAVivir.png" alt="Disco 3"></a><a href="#">
                            <p>Sin Miedo A Vivir</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloElMadrileño.png" alt="Disco 3"></a><a href="#">
                            <p>El Madrileño</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloMoonlight.png" alt="Disco 3"></a><a href="#">
                            <p>Moonlight</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloTKT.png" alt="Disco 3"></a><a href="#">
                            <p>TKT</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloMaracuchoBueno.png" alt="Disco 3"></a><a href="#">
                            <p>Maracucho Bueno Muere Chiquito</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloHeroe.png" alt="Disco 3"></a><a href="#">
                            <p>Héroe</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloRemixes.png" alt="Disco 3"></a><a href="#">
                            <p>Remixes y Regalos</p>
                        </a></li>
                </ul>
            </div>
        </div>

        <!--theLatest-->
        <p class="etiquetaCentral">the<span>Latest</span></p>

        <!--Lista de discos dentro de Most Popular-->
        <div class="Lista-discos">
            <div class="scroller" data-direction="right">
                <ul class="lista-horizontal">
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloInkebrantable.png" alt="Disco 3"></a><a href="#">
                            <p>Inkebrantable</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloMMCD.png" alt="Disco 3"></a><a href="#">
                            <p>Me Muevo Con Dios</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloYIPIYOU.png" alt="Disco 3"></a><a href="#">
                            <p>YIPIYOU</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloBBO.png" alt="Disco 3"></a><a href="#">
                            <p>BBO</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloNombreDireccion.png" alt="Disco 3"></a><a href="#">
                            <p>Nombre Dirección</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloBrownBoy.png" alt="Disco 3"></a><a href="#">
                            <p>Brown Boy</p>
                        </a></li>
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
                    <li><a href="../PHP/cerrarSesion.php">CERRAR SESIÓN</a></li>
                    <li><a href="../../Mi-Proyecto/PHP/discos.php">DISCOS</a></li>
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