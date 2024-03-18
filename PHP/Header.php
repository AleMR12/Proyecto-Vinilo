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

    <header>
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
                // Iniciar la sesión
                session_start();
                ?>
            </div>
        </div>
    </header>