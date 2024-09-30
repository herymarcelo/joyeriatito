document.addEventListener('DOMContentLoaded', function() {
    let images = document.querySelectorAll('.image-container img');
    let currentIndex = 0;

    if (images.length === 0) {
        console.error("No se encontraron imágenes");
    } else {
        function showNextImage() {
            // Oculta la imagen actual
            images[currentIndex].classList.remove('active');
            images[currentIndex].classList.add('next');

            // Actualiza el índice para la siguiente imagen
            currentIndex = (currentIndex + 1) % images.length;

            // Muestra la siguiente imagen
            images[currentIndex].classList.add('active');

            // Limpia la clase "next" de la imagen actual después de un retraso
            setTimeout(() => {
                images[currentIndex].classList.remove('next');
            }, 1000); // Tiempo para que la transición de la imagen actual complete
        }

        // Muestra la primera imagen
        images[currentIndex].classList.add('active');

        setInterval(showNextImage, 5000); // Cambia cada 5 segundos
    }
});

// Código nuevo para el carrusel
document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.carousel-item');
    
    items.forEach(item => {
        item.addEventListener('click', function() {
            const newPos = parseInt(item.getAttribute('data-pos'));

            items.forEach(i => {
                const currentPos = parseInt(i.getAttribute('data-pos'));
                let newPosValue = currentPos - newPos;
                
                // Ajustar los valores para mantener el orden circular
                if (newPosValue > 2) newPosValue -= 5;
                if (newPosValue < -2) newPosValue += 5;
                
                i.setAttribute('data-pos', newPosValue);
            });
        });
    });
});

document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', () => {
        document.querySelectorAll('.card').forEach(c => c.classList.remove('active')); // Remueve "active" de todas las tarjetas
        card.classList.add('active'); // Agrega "active" a la tarjeta clickeada
    });
});