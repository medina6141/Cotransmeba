



fetch('../../components/header.html')
.then(response => {
    if (!response.ok) {
        throw new Error('Error al cargar el archivo');
    }
    return response.text();
})
.then(data => {
    document.getElementById('header-container').innerHTML = data;
})
.catch(error => console.error('Error:', error));
   


fetch('../../components/footer.html')
.then(response => {
    if (!response.ok) {
        throw new Error('Error al cargar el archivo');
    }
    return response.text();
})
.then(data => {
    document.getElementById('footer-pie').innerHTML = data;
})
.catch(error => console.error('Error:', error));





let currentIndex = 0;

function showSlide(index) {
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;

    // Ajuste del índice de acuerdo con el total de imágenes
    if (index >= totalSlides) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = totalSlides - 1;
    } else {
        currentIndex = index;
    }

    // Calcular el desplazamiento para el slider
    const offset = -currentIndex * 100;
    slides.style.transform = `translateX(${offset}%)`;

    // Mostrar el texto del slide activo
    updateActiveSlideText();
}

function changeSlide(direction) {
    showSlide(currentIndex + direction);
}

// Función para actualizar el texto del slide activo
function updateActiveSlideText() {
    const slides = document.querySelectorAll('.slide');
    slides.forEach((slide, i) => {
        const text = slide.querySelector('.slide-text');
        if (i === currentIndex) {
            text.style.opacity = 1; // Hacer visible el texto del slide activo
            text.style.transform = 'translate(-50%, -50%)'; // Restablecer transform
        } else {
            text.style.opacity = 0; // Ocultar texto de los slides inactivos
            text.style.transform = 'translate(-50%, -50%) translateY(20px)'; // Añadir efecto de deslizamiento
        }
    });
}

// Inicializar el slider
showSlide(currentIndex);

function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('show-menu');
}



// Agregar este código para cerrar el menú al seleccionar una opción
const navLinks = document.querySelectorAll('.nav-links a');

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        const navLinksContainer = document.querySelector('.nav-links');
        navLinksContainer.classList.remove('show-menu'); // Cierra el menú al hacer clic
    });
});

