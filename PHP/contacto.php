<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo - Contacto</title>
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!-- Insertamos icono google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Insertamos los archivos JS -->
    <script src="../JS/chatsoporte.js"></script>
    <script src="../JS/BarraNavegacionVertical.js"></script>

    <!-- Insertamos los archivos CSS -->
    <link rel="stylesheet" href="../CSS/Contacto.css">
</head>

<body>
    <header>
        <?php
        require('Header.php');
        ?>
    </header>

    <main>
        <!-- Contenedor para el mapa y la información -->
        <div id="map-container">
            <!-- Mapa -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.8323647478624!2d-4.42611632453851!3d36.72658707226817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72f7bc017dba91%3A0x42ebc77aa4a51db6!2sC.%20Oller%C3%ADas%2C%2077%2C%20Distrito%20Centro%2C%2029012%20M%C3%A1laga!5e0!3m2!1ses!2ses!4v1715547802387!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Información de contacto -->
            <div id="info-section">
                <h2>Datos de Contacto</h2>
                <p>mundovinilo@mundovinilo.com</p>
                <p>Teléfono: +34 672 65 95 24</p>
            </div>
        </div>
    </main>

    <footer>
        <?php
        require('footer.php');
        ?>
    </footer>

    <!-- Chat de soporte -->
    <div id="chat-container" class="minimized">
        <div id="chat-header">
            <div>Chat de Soporte</div>
            <button id="toggle-button" onclick="toggleChat()">
                <span class="material-symbols-outlined">
                    expand_all
                </span>
            </button>
        </div>

        <!-- Cuerpo donde se ven los mensajes. No borrar aunque sea un div vacío     -->
        <div id="messages-container">
        </div>
        <div class="chat-input-container">
            <input type="text" id="chat-input" placeholder="Escribe tu mensaje aquí...">
            <button id="send-button"><span class="material-symbols-outlined">
                    send
                </span></button>
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
                <li><a href="../PHP/Index.php">INICIO</a></li>
                <li><a href="../PHP/Artistas.php">ARTISTAS</a></li>
                <li><a href="../PHP/Conciertos.php">CONCIERTOS</a></li>
                <li><a href="../PHP/Merchandising.php">MERCHANDISING</a></li>
                <li><a href="../PHP/Discos.php">DISCOS</a></li>
            </ul>
        </nav>
    </div>
    <script>
        // Función para alternar la visibilidad del chat
        function toggleChat() {
            const chatContainer = document.getElementById('chat-container');
            chatContainer.classList.toggle('minimized');
        }
    </script>
</body>

</html>