document.addEventListener('DOMContentLoaded', function() {
    const messagesContainer = document.getElementById('messages-container');
    const chatInput = document.getElementById('chat-input');
    const sendButton = document.getElementById('send-button');

    // Event listener para enviar mensaje al hacer clic en el botón
    sendButton.addEventListener('click', function() {
        const message = chatInput.value.trim();
        if (message !== '') {
            sendMessage(message);
            chatInput.value = '';
        }
    });

    // Event listener para enviar mensaje al presionar Enter
    chatInput.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            const message = chatInput.value.trim();
            if (message !== '') {
                sendMessage(message);
                chatInput.value = '';
            }
        }
    });

    // Función para enviar mensaje
    function sendMessage(message) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message', 'sender');
        messageElement.innerHTML = '<div class="message-content">' + message + '</div>';
        messagesContainer.appendChild(messageElement);

        // Simular respuesta después de un tiempo
        setTimeout(function() {
            receiveMessage('Gracias por tu mensaje. Nos pondremos en contacto contigo lo antes posible.');
        }, 1000);
    }

    // Función para recibir mensaje
    function receiveMessage(message) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message', 'receiver');
        messageElement.innerHTML = '<div class="message-content">' + message + '</div>';
        messagesContainer.appendChild(messageElement);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }
});
