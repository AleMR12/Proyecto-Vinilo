<?php
session_start();

// Limpia las variables de sesión después de guardarlas en variables locales
unset($_SESSION['successMensaje'], $_SESSION['errorMensaje']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo</title>

    <!-- Ponemos el icono la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!--Agregamos los CSS-->
    <link rel="stylesheet" type="text/css" href="../CSS/Index.css">
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
    <!--Creamos nuestra cabecera-->
    <div class="Cabecera">

        <!--Ponemos el logo a la izquierda-->
        <a href="../HTML/Index.html" id="aLogo"><img src="../Imagenes/Extras/Logo.png" id="Logo" alt="Logo"></a>
        <!--Creamos la primera barra de navegacion que es horizontal-->
        <nav class="Nav">
            <ul>
                <li><a href="../HTML/Discos.html">DISCOS</a></li>
                <li><a href="#">ARTISTAS</a></li>
                <li><a href="#">CONCIERTOS</a></li>
                <li><a href="#">MERCHANDISING</a></li>
                <li><a href="#">CONTACTO</a></li>
            </ul>
        </nav>

        <!--Creamos la barra de busqueda e inicio de sesion-->
        <div id="BBIS">
            <input id="BarraBusqueda" type="text" placeholder="Pulsa para buscar.. " name="BarraBusqueda">
            <img src="../Imagenes/Extras/CirculoBarraBusqueda.png" id="ImgBarraBusqueda" alt="Icono de búsqueda">
            <?php
            if (isset($_SESSION['username'])) {
                // Mostrar el nombre de usuario si está iniciado sesión
                echo '<p>Bienvenido, ' . $_SESSION['username'] . '</p>';
            } else {
                // Mostrar el enlace de inicio de sesión si no está iniciado sesión
                echo '<a href="../HTML/Log In.html"><img src="../Imagenes/Extras/Log In.png" id="Login"></a>';
            }
            ?>
        </div>

        <!--mostPopular-->
        <p class="etiquetaCentral">most<span>Popular</span></p>

        <!--Lista de discos dentro de Most Popular-->
        <div class="Lista-discos">
            <div class="scroller">
                <ul class="lista-horizontal">
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Sin Miedo A Vivir.png" alt="Disco 3"></a><a href="#">
                            <p>Sin Miedo A Vivir</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo El Madrileño.png" alt="Disco 3"></a><a href="#">
                            <p>El Madrileño</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Moonlight.png" alt="Disco 3"></a><a href="#">
                            <p>Moonlight</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloTKT.png" alt="Disco 3"></a><a href="#">
                            <p>TKT</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Maracucho Bueno.png" alt="Disco 3"></a><a href="#">
                            <p>Maracucho Bueno Muere Chiquito</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Heroe.png" alt="Disco 3"></a><a href="#">
                            <p>Héroe</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Remixes.png" alt="Disco 3"></a><a href="#">
                            <p>Remixes y Regalos</p>
                        </a></li>
                </ul>
            </div>
        </div>

        <!--Creamos el menu de la barra de navegacion vertical-->
        <ul>
            <li id="Menu" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                    </svg></a></li>
        </ul>

        <!--theLatest-->
        <p class="etiquetaCentral">the<span>Latest</span></p>

        <!--Lista de discos dentro de Most Popular-->
        <div class="Lista-discos">
            <div class="scroller" data-direction="right">
                <ul class="lista-horizontal">
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Inkebrantable.png" alt="Disco 3"></a><a href="#">
                            <p>Inkebrantable</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo MMCD.png" alt="Disco 3"></a><a href="#">
                            <p>Me Muevo Con Dios</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo YIPIYOU.png" alt="Disco 3"></a><a href="#">
                            <p>YIPIYOU</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo BBO.png" alt="Disco 3"></a><a href="#">
                            <p>BBO</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Nombre Direccion.png" alt="Disco 3"></a><a href="#">
                            <p>Nombre Dirección</p>
                        </a></li>
                    <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Brown Boy.png" alt="Disco 3"></a><a href="#">
                            <p>Brown Boy</p>
                        </a></li>
                </ul>
            </div>
        </div>

        <!--Creamos la segunda barra de navegacion la cual es vertical-->
        <div class="Cabecera2">
            <nav>
                <ul class="Sidebar">
                    <li id="CerrarMenu" onclick="closeSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                            </svg></a></li>
                    <li><a href="#">DISCOS</a></li>
                    <li><a href="#">ARTISTAS</a></li>
                    <li><a href="#">CONCIERTOS</a></li>
                    <li><a href="#">MERCHANDISING</a></li>
                    <li><a href="#">CONTACTO</a></li>
                </ul>
            </nav>
        </div>

        <footer class="footer">
            <div class="footer-content">
                <div class="empresa">
                    <h2>Mundo Vinilo</h2> <br>
                    <p>Dirección: C. Ollerías, 56, Distrito Centro, 29012 Málaga</p>
                    <p>Teléfono: +34 672 65 95 24</p>
                </div>

                <div class="redes-sociales">
                    <h2>Redes Sociales</h2>
                    <ul>
                        <!-- Facebook -->
                        <li><a href="https://www.facebook.com/MUNDOVINILO2" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24">
                                    <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-86.4 144h-38.4v-48c0-14.5 11.9-26.4 26.4-26.4h12v-36.9h-36.4c-43.9 0-60.6 32.5-60.6 55.7v31.6h-25.6v40h25.6v96h48v-96h38.4v-40z" />
                                </svg>
                            </a></li>
                        <!-- Tik Tok -->
                        <li><a href="https://www.tiktok.com/@mundovinilo.es?is_from_webapp=1&sender_device=pc" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24">
                                    <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-189.8 288c-47.1 0-85.3-38.2-85.3-85.3s38.2-85.3 85.3-85.3 85.3 38.2 85.3 85.3-38.2 85.3-85.3 85.3zm111.6-64h-38.4v-96h-48v96h-25.6v-96h-38.4v-40h102.4v40zm86.4-160h-76.8v-16c0-22.1 18-40 40-40h36.8v40c0 22.1-17.9 40-40 40z" />
                                </svg>
                            </a></li>
                        <!-- Twitter -->
                        <li><a href="https://x.com/VinilosMundo?s=20" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24">
                                    <path d="M436 109.7c-16.2 7.2-33.5 12-52 14.2 18.7-11.2 33-28.9 39.7-50.1-17.5 10.4-36.8 18-57.3 22.1C351.3 68.2 328.2 56 302.2 56c-49.7 0-90 40.3-90 90 0 7.2.8 14.2 2.3 21-74.8-3.8-141.1-39.5-185.4-93.9-7.8 13.4-12.3 29-12.3 45.5 0 31.4 16 59.2 40.3 75.6-14.9-.5-29.2-4.6-41.7-11.6v1.2c0 43.9 31.1 80.5 72.2 88.7-7.6 2.1-15.6 3.2-24 3.2-5.9 0-11.7-.6-17.4-1.7 11.7 36.5 45.7 63.1 86 63.9-31.5 24.7-71.2 39.5-114.4 39.5-7.4 0-14.7-.5-21.9-1.6 40.7 26.1 89.1 41.1 141.1 41.1 169.3 0 262.2-140.3 262.2-262.2 0-4 .1-8 .1-12 .2-20.2 3.8-39.8 10.9-57.9z" />
                                </svg>
                            </a></li>
                        <!-- Instagram -->
                        <li><a href="https://www.instagram.com/mundo.vinilo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24">
                                    <path d="M224 141c-63.6 0-115 51.4-115 115s51.4 115 115 115 115-51.4 115-115-51.4-115-115-115zm0 184.1c-40.2 0-69.1-28.9-69.1-69.1s28.9-69.1 69.1-69.1 69.1 28.9 69.1 69.1-28.9 69.1-69.1 69.1zm122-184.1c-20.6 0-37.3 16.7-37.3 37.3s16.7 37.3 37.3 37.3 37.3-16.7 37.3-37.3-16.7-37.3-37.3-37.3zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-32.8 295.8c0 17.1-13.8 31-31 31-17.1 0-31-13.8-31-31s13.8-31 31-31c17.1-.1 31 13.9 31 31z" />
                                </svg>
                            </a></li>
                        <!-- YouTube -->
                        <li><a href="https://www.youtube.com/@MundoVinilo" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="24" height="24">
                                    <path d="M569.3 152.8c-6.3-23.6-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6C15.1 195.7 15.1 285.2 15.1 285.2s0 89.5 11.4 132.3c6.3 23.6 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.8 11.4-132.3 11.4-132.3s0-89.5-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                                </svg>
                            </a></li>
                    </ul>
                </div>

                <div class="menu-footer">
                    <ul>
                        <li class="lista-footer"><a href="#">DISCOS</a></li>
                        <li class="lista-footer"><a href="#">ARTISTAS</a></li>
                        <li class="lista-footer"><a href="#">CONCIERTOS</a></li>
                        <li class="lista-footer"><a href="#">MERCHANDISING</a></li>
                        <li class="lista-footer"><a href="#">CONTACTO</a></li>
                    </ul>
                </div>
            </div>

            <p class="copyright">&copy; 2024 MundoVinilo. Todos los derechos reservados.</p>

        </footer>

</body>

</html>