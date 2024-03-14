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

            <!-- Verificar si el usuario ha iniciado sesión -->
            <?php
                session_start();
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
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Sin Miedo A Vivir.png"
                            alt="Disco 3"></a><a href="#">
                        <p>Sin Miedo A Vivir</p>
                    </a></li>
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo El Madrileño.png" alt="Disco 3"></a><a
                        href="#">
                        <p>El Madrileño</p>
                    </a></li>
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Moonlight.png" alt="Disco 3"></a><a
                        href="#">
                        <p>Moonlight</p>
                    </a></li>
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/ViniloTKT.png" alt="Disco 3"></a><a href="#">
                        <p>TKT</p>
                    </a></li>
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Maracucho Bueno.png"
                            alt="Disco 3"></a><a href="#">
                        <p>Maracucho Bueno Muere Chiquito</p>
                    </a></li>
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Heroe.png" alt="Disco 3"></a><a
                        href="#">
                        <p>Héroe</p>
                    </a></li>
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Remixes.png" alt="Disco 3"></a><a
                        href="#">
                        <p>Remixes y Regalos</p>
                    </a></li>
            </ul>
        </div>
    </div>

    <!--Creamos el menu de la barra de navegacion vertical-->
    <ul>
        <li id="Menu" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24"
                    viewBox="0 -960 960 960" width="24">
                    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                </svg></a></li>
    </ul>

    <!--theLatest-->
    <p class="etiquetaCentral">the<span>Latest</span></p>

    <!--Lista de discos dentro de Most Popular-->
    <div class="Lista-discos">
        <div class="scroller" data-direction="right">
            <ul class="lista-horizontal">
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Inkebrantable.png" alt="Disco 3"></a><a
                        href="#">
                        <p>Inkebrantable</p>
                    </a></li>
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo MMCD.png" alt="Disco 3"></a><a href="#">
                        <p>Me Muevo Con Dios</p>
                    </a></li>
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo YIPIYOU.png" alt="Disco 3"></a><a
                        href="#">
                        <p>YIPIYOU</p>
                    </a></li>
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo BBO.png" alt="Disco 3"></a><a href="#">
                        <p>BBO</p>
                    </a></li>
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Nombre Direccion.png"
                            alt="Disco 3"></a><a href="#">
                        <p>Nombre Dirección</p>
                    </a></li>
                <li class="item"><a href="#"><img src="../Imagenes/Vinilos/Vinilo Brown Boy.png" alt="Disco 3"></a><a
                        href="#">
                        <p>Brown Boy</p>
                    </a></li>
            </ul>
        </div>
    </div>

    <!--Creamos la segunda barra de navegacion la cual es vertical-->
    <div class="Cabecera2">
        <nav>
            <ul class="Sidebar">
                <li id="CerrarMenu" onclick="closeSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                            height="24" viewBox="0 -960 960 960" width="24">
                            <path
                                d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
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
                    <!--Facebook-->
                    <li><a href="https://www.facebook.com/MUNDOVINILO2" target="_blank">
                            <?xml version="1.0" ?>
                            <!DOCTYPE svg
                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg
                                enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1"
                                viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path
                                    d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z" />
                            </svg>
                        </a></li>
                    <!--Tik Tok-->
                    <li><a href="https://www.tiktok.com/@mundovinilo.es?is_from_webapp=1&sender_device=pc"
                            target="_blank">
                            <?xml version="1.0" ?><svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                            </svg>
                        </a></li>
                    <li><a href="https://x.com/VinilosMundo?s=20" target="_blank"> <!--Twitter-->
                            <?xml version="1.0" ?>
                            <!DOCTYPE svg
                                PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg
                                height="100%"
                                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                version="1.1" viewBox="0 0 512 512" width="100%" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path
                                    d="M161.014,464.013c193.208,0 298.885,-160.071 298.885,-298.885c0,-4.546 0,-9.072 -0.307,-13.578c20.558,-14.871 38.305,-33.282 52.408,-54.374c-19.171,8.495 -39.51,14.065 -60.334,16.527c21.924,-13.124 38.343,-33.782 46.182,-58.102c-20.619,12.235 -43.18,20.859 -66.703,25.498c-19.862,-21.121 -47.602,-33.112 -76.593,-33.112c-57.682,0 -105.145,47.464 -105.145,105.144c0,8.002 0.914,15.979 2.722,23.773c-84.418,-4.231 -163.18,-44.161 -216.494,-109.752c-27.724,47.726 -13.379,109.576 32.522,140.226c-16.715,-0.495 -33.071,-5.005 -47.677,-13.148l0,1.331c0.014,49.814 35.447,93.111 84.275,102.974c-15.464,4.217 -31.693,4.833 -47.431,1.802c13.727,42.685 53.311,72.108 98.14,72.95c-37.19,29.227 -83.157,45.103 -130.458,45.056c-8.358,-0.016 -16.708,-0.522 -25.006,-1.516c48.034,30.825 103.94,47.18 161.014,47.104"
                                    style="fill-rule:nonzero;" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/mundo.vinilo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank"> <!--Instagram-->
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.7 56.7"
                                enable-background="new 0 0 56.7 56.7" xml:space="preserve">
                                <g>
                                    <path d="M28.2,16.7c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8S41,36.5,41,29.5S35.2,16.7,28.2,16.7z M28.2,37.7
		c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S32.7,37.7,28.2,37.7z" />
                                    <circle cx="41.5" cy="16.4" r="2.9" />
                                    <path d="M49,8.9c-2.6-2.7-6.3-4.1-10.5-4.1H17.9c-8.7,0-14.5,5.8-14.5,14.5v20.5c0,4.3,1.4,8,4.2,10.7c2.7,2.6,6.3,3.9,10.4,3.9
		h20.4c4.3,0,7.9-1.4,10.5-3.9c2.7-2.6,4.1-6.3,4.1-10.6V19.3C53,15.1,51.6,11.5,49,8.9z M48.6,39.9c0,3.1-1.1,5.6-2.9,7.3
		s-4.3,2.6-7.3,2.6H18c-3,0-5.5-0.9-7.3-2.6C8.9,45.4,8,42.9,8,39.8V19.3c0-3,0.9-5.5,2.7-7.3c1.7-1.7,4.3-2.6,7.3-2.6h20.6
		c3,0,5.5,0.9,7.3,2.7c1.7,1.8,2.7,4.3,2.7,7.2V39.9L48.6,39.9z" />
                                </g>
                            </svg>

                        </a>
                    </li>
                    <li><a href="https://www.youtube.com/@MundoVinilo" target="_blank"> <!--Youtube-->
                            <?xml version="1.0" ?><svg viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
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