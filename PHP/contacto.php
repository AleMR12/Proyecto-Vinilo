<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo</title>

    <!-- Ponemos el icono la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!-- Le damos estilo -->
    <style>
        /* Estilos para el mapa */
        #map {
            height: 400px;
            width: 100%;
        }

        /* Estilos para el chat */
        #chat-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        #chat-widget h3 {
            margin: 0;
        }
    </style>

    <!-- Agrega el script de Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&callback=initMap" async defer></script>
    <script>
        // Función para inicializar el mapa
        function initMap() {
            // Coordenadas de la empresa
            var empresa = {
                lat: 36.723382,
                lng: -4.419884
            };
            // Crear el mapa centrado en la empresa
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: empresa
            });
            // Marcar la ubicación de la empresa en el mapa
            var marker = new google.maps.Marker({
                position: empresa,
                map: map,
                title: 'Empresa'
            });
        }
    </script>
</head>

<body>

    <header>

        <?php
        require('Header.php');
        ?>

    </header>

    <!-- Mapa de Google -->
    <div id="map"></div>

    <!-- Información de contacto -->
    <h2>Dirección</h2>
    <p>C. Ollerías, 77, Distrito Centro, 29012 Málaga</p>
    <p>Teléfono: +34 672 65 95 24</p>

    <!-- Chat de soporte rápido -->
    <div id="chat-widget">
        <h3>¿Necesitas ayuda?</h3>
        <p>Habla con nosotros en tiempo real.</p>
        <button onclick="openChat()">Abrir Chat</button>
    </div>

    <!-- Script para abrir el chat -->
    <script>
        function openChat() {
            // Aquí podrías agregar el código necesario para abrir el chat de soporte rápido
            alert("Abriendo chat...");
        }
    </script>
</body>

</html>