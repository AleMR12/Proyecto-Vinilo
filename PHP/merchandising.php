<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo - Merchandising</title>

    <!-- Ponemos el icono la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!-- Agregamos los archivos JS -->
    <script src="../JS/BarraNavegacionVertical.js"></script>

    <!-- Agregamos los estilos CSS -->
    <style>
        main {
            padding: 2rem;
            background-color: #fff;
            margin: 2rem auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            border-radius: 8px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .merch-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 2rem;
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        .merch-item {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 10px;
            padding: 20px;
            text-align: center;
            width: 200px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .merch-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .merch-item a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .merch-item a:hover {
            color: #007BFF;
        }

        .merch-item img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
        }

        .a-artistas{
            color: black;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>

    <!-- Header de la página -->
    <header>
        <?php
        require('Header.php');
        ?>
    </header>

    <main>
        <h1>Merchandising de Artistas</h1>

        <!-- Aplicamos la función de clicado para abrir la barra de navegación vertical -->
        <ul>
            <li id="Menu" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                    </svg></a></li>
        </ul>

        <!-- Aplicamos la función de clicado para cerrar la barra de navegación vertical -->
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
                    <li><a href="../PHP/conciertos.php">CONCIERTOS</a></li>
                    <li><a href="../PHP/contacto.php">CONTACTO</a></li>
                </ul>
            </nav>
        </div>

        <div class="merch-list">
            <a href="https://toterreno.es/discografia/" target="_blank" class="a-artistas">
                <div class="merch-item">
                    <img src="../Imagenes/Artistas/Tote.jpg" alt="Tote King">
                    <p>Tote King</p>
                </div>
            </a>
            <a href="https://apparell.com/collections/cruz-cafune" target="_blank" class="a-artistas">
                <div class="merch-item">
                    <img src="../Imagenes/Artistas/Cruzzi.jpg" alt="Cruz Cafuné">
                    <p>Cruz Cafuné</p>
                </div>
            </a>
            <a href="https://tienda.sfdkoficial.com/es/" target="_blank" class="a-artistas">
                <div class="merch-item">
                    <img src="../Imagenes/Artistas/SFDK.jpg" alt="SFDK">
                    <p>SFDK</p>
                </div>
            </a>
            <a href="https://www.comun20.com/96-kaseo" target="_blank" class="a-artistas">
                <div class="merch-item">
                    <img src="../Imagenes/Artistas/kase.jpg" alt="Kase O">
                    <p>Kase O</p>
                </div>
            </a>
            <!-- Agrega más artistas según sea necesario -->
        </div>
    </main>

    <footer>
        <?php require('footer.php'); ?>
    </footer>

</body>

</html>