/*Loop infinito listas discos*/
// Espera a que se cargue el contenido del DOM
document.addEventListener("DOMContentLoaded", function () {
    // Selecciona los elementos con la clase .scroller
    const scrollers = document.querySelectorAll(".scroller");

    // Verifica si se debe agregar la animación
    if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
        // Llama a la función para agregar la animación
        addAnimationIzquierda();
        addAnimationDerecha();
        
    }

    // Función para agregar la animación
    function addAnimationIzquierda() {
        // Itera sobre cada elemento .scroller y agrega el atributo data-animated
        scrollers.forEach((scroller) => {
            scroller.setAttribute("data-animated", true);

            const scrollerInner = scroller.querySelector(".lista-horizontal");
            const scrollerContent = Array.from(scrollerInner.children);

            scrollerContent.forEach(item => {

                const duplicatedItem = item.cloneNode(true);
                duplicatedItem.setAttribute("aria-hidden", true);
                scrollerInner.appendChild(duplicatedItem);
            })

        });
    }
    
});
