
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

    const offset = -currentIndex * 100;
    slides.style.transform = `translateX(${offset}%)`;
}

function changeSlide(direction) {
    showSlide(currentIndex + direction);
}

// Inicializar el slider
showSlide(currentIndex);
