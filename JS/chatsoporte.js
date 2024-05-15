document.addEventListener('DOMContentLoaded', function () {
    const messagesContainer = document.getElementById('messages-container');
    const chatInput = document.getElementById('chat-input');
    const sendButton = document.getElementById('send-button');

    // Event listener para enviar mensaje al hacer clic en el botón
    sendButton.addEventListener('click', sendMessage);

    // Event listener para enviar mensaje al presionar Enter
    chatInput.addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            sendMessage();
        }
    });

    // Función para enviar mensaje
    function sendMessage() {
        const message = chatInput.value.trim();
        if (message !== '') {
            const messageElement = document.createElement('div');
            messageElement.classList.add('message', 'sender');
            messageElement.innerHTML = '<div class="message-content">' + message + '</div>';
            messagesContainer.appendChild(messageElement);

            // Respuestas automáticas
            const replyMessage = generateReply(message);
            setTimeout(function () {
                receiveMessage(replyMessage);
            }, 1000);

            // Limpiar el input después de enviar el mensaje
            chatInput.value = '';
        }
    }

    // Función para generar respuestas automáticas
    function generateReply(message) {
        // Analizar el mensaje del usuario y generar una respuesta adecuada
        if (message.toLowerCase().includes('hola')) {
            return '¡Hola! ¿En qué puedo ayudarte?';
        } else if (message.toLowerCase().includes('precio')) {
            return 'Nuestros precios varían según el producto. ¿Tienes algo específico en mente?';
        } else {
            return 'Gracias por tu mensaje. Si nos puedes hacer el favor de ofrecer algún dato de contacto, nos pondremos en contacto contigo lo antes posible.';
        }
    }

    // Función para recibir mensajes automáticos
    function receiveMessage(message) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message', 'receiver');
        messageElement.innerHTML = '<div class="message-content">' + message + '</div>';
        messagesContainer.appendChild(messageElement);
    }
});
