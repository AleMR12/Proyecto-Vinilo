<?php
session_start();
?>

<!-- Añadimos CSS para PHP -->
<link rel="stylesheet" type="text/css" href="../CSS/IndexPHP.css">
<link rel="stylesheet" type="text/css" href="../CSS/@Media.css">
<link rel="stylesheet" type="text/css" href="../CSS/@Keyframes.css">

<!-- Iconos de Google -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0" /> <!-- Carrito -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0" /> <!-- Cerrar Sesion -->

<!-- Añadimos JS -->
<script src="../../Mi-Proyecto/JS/carrito.js"></script>

<!-- header.php -->
<!-- header.php -->
<div class="Cabecera">
    <!-- Logo -->
    <a href="../PHP/Index.php" class="aLogo">
        <img src="../Imagenes/Extras/Logo.png" class="Logo" alt="Logo">
    </a>
    <!-- Barra de navegación -->
    <nav class="Nav">
        <ul>
            <li><a href="../PHP/discos.php">DISCOS</a></li>
            <li><a href="../HTML/Artistas.html">ARTISTAS</a></li>
            <li><a href="../HTML/Conciertos.html">CONCIERTOS</a></li>
            <li><a href="../HTML/Merchandising.html">MERCHANDISING</a></li>
            <li><a href="../HTML/Contacto.html">CONTACTO</a></li>
        </ul>
    </nav>
    <!-- PHP para mostrar el mensaje de bienvenida y los íconos -->
    <?php
    if (isset($_SESSION['usuario'])) {
        echo '<p class="bienvenida">Bienvenido,&nbsp; ' . $_SESSION['usuario'] . '</p>';
        echo '<div class="carrito-container">'; // Contenedor adicional
        echo '<div class="carrito" id="carrito-icono">';
        echo '<span class="material-symbols-outlined">shopping_cart</span>';
        echo '<div id="menu-carrito" class="menu-carrito-oculto">';
        if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
            echo '<ul id="elementos-carrito">';
            foreach ($_SESSION['carrito'] as $elemento) {
                echo '<li>' . $elemento . '</li>';
            }
            echo '</ul>';
        }
        echo '</div>';
        echo '</div>';
        // Aquí agregamos el número de elementos en el carrito
        echo '<span id="cantidad-carrito" class="cantidad-carrito">' . (isset($_SESSION['cantidad_total_carrito']) ? $_SESSION['cantidad_total_carrito'] : 0) . '</span>';
        echo '</div>'; // Cerrar el contenedor adicional
        echo '<a href="../PHP/cerrarSesion.php" class="enlace-imagen-cerrar"><span class="material-symbols-outlined">logout</span></a>';
    } else {
        echo '<a href="../HTML/LogIn.html" class="enlace-imagen">';
        echo '<img src="../Imagenes/Extras/LogIn.png" alt="Iniciar Sesión">';
        echo '</a>';
    }
    ?>
</div>
