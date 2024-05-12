<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo</title>
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">
    <style>
        /* Estilos para el mapa */
        #map-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            height: auto;
            margin-top: 2rem;
            /* Añadido margen arriba */
            margin-left: 2rem;
            /* Añadido margen izquierdo */
        }

        #map {
            flex: 1;
            height: 100%;
        }

        /* Estilos para la sección de información */
        #info-section {
            flex: 1;
            padding: 20px;
        }

        /* Estilos para el chat de soporte */
        #chat-container {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f1f1f1;
            border-top: 1px solid #ccc;
            padding: 10px;
        }

        #chat-input {
            width: calc(100% - 80px);
            padding: 5px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #send-button {
            width: 60px;
            padding: 5px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #messages-container {
            height: 200px;
            overflow-y: auto;
            margin-bottom: 10px;
            padding: 0 10px;
        }

        .message {
            margin-bottom: 5px;
        }

        .message.sender {
            text-align: right;
        }

        .message.sender .message-content {
            background-color: #007bff;
            color: #fff;
        }

        .message.receiver .message-content {
            background-color: #f1f1f1;
            color: #000;
        }
    </style>
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
    <div id="chat-container">
        <div id="messages-container"></div>
        <input type="text" id="chat-input" placeholder="Escribe tu mensaje aquí...">
        <button id="send-button">Enviar</button>
    </div>

    <script src="../JS/chatsoporte.js"></script>

</body>

</html>
