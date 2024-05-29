<?php
session_set_cookie_params(0); // La sesión expirará al cerrar el navegador
session_start();

// Obtener la cantidad total de productos en el carrito
$cantidad_total_carrito = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        $cantidad_total_carrito += $product['quantity'];
    }
}
?>

<!--Agregamos los CSS-->
<link rel="stylesheet" type="text/css" href="../CSS/Index.css">
<link rel="stylesheet" type="text/css" href="../CSS/@Keyframes.css">
<link rel="stylesheet" type="text/css" href="../CSS/@Media.css">
<link rel="stylesheet" type="text/css" href="../CSS/Reset.css">
<link rel="stylesheet" type="text/css" href="../CSS/Cabecera.css">
<link rel="stylesheet" type="text/css" href="../CSS/IndexPHP.css">

<!-- Fuente de Google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300&display=swap" rel="stylesheet">

<!-- Iconos de Google -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0" /> <!-- Carrito -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0" /> <!-- Cerrar Sesion -->

<!-- Añadimos JS -->
<script src="../../Mi-Proyecto/JS/carrito.js"></script>

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
            <li><a href="../PHP/artistas.php">ARTISTAS</a></li>
            <li><a href="../PHP/conciertos.php">CONCIERTOS</a></li>
            <li><a href="../PHP/merchandising.php">MERCHANDISING</a></li>
            <li><a href="../PHP/contacto.php">CONTACTO</a></li>
        </ul>
    </nav>
    <!-- PHP para mostrar el mensaje de bienvenida y los íconos -->
    <?php
    if ((isset($_SESSION['usuario']) or (isset($_SESSION['user_id'])))) {
        echo '<p class="bienvenida"><a href="../PHP/verPedidos.php">Bienvenido/a,&nbsp; ' . $_SESSION['usuario'] . '</a></p>';
        echo '<div class="carrito-container">'; // Contenedor adicional
        echo '<a href="../PHP/verCarrito.php">'; // Enlace al carrito
        echo '<div class="carrito" id="carrito-icono">';
        echo '<span class="material-symbols-outlined">shopping_cart</span>';
        // Mostrar el contador del carrito
        echo $cantidad_total_carrito;
        echo '</div>';
        echo '</a>'; // Cierre del enlace al carrito
        echo '</div>';
        echo '<a href="../PHP/cerrarSesion.php" class="enlace-imagen-cerrar"><span class="material-symbols-outlined">logout</span></a>';
    } else {
        echo '<a href="../HTML/LogIn.html" class="enlace-imagen">';
        echo '<img src="../Imagenes/Extras/LogIn.png" alt="Iniciar Sesión">';
        echo '</a>';
    }
    ?>


</div>