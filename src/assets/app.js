// Archivo vacío por ahora o agrega cualquier lógica JS necesaria
import './styles.css';
console.log('App cargada');
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('nav ul li a');
    const pageNameElement = document.getElementById('page-name');

    if (pageNameElement) {
        links.forEach(link => {
            link.addEventListener('mouseover', function() {
                const pageName = this.getAttribute('data-nombre');
                pageNameElement.textContent = pageName;
            });

            link.addEventListener('mouseout', function() {
                pageNameElement.textContent = '';
            });
        });
    }
});
// Eliminar BOM si está presente
function removeBOM(text) {
    if (text.charCodeAt(0) === 0xFEFF) {
        return text.slice(1);
    }
    return text;
}

// Aplicar la eliminación del BOM a todos los elementos del DOM
document.addEventListener('DOMContentLoaded', function() {
    function removeBOMFromElement(element) {
        if (element.nodeType === Node.TEXT_NODE) {
            element.textContent = removeBOM(element.textContent);
        } else {
            element.childNodes.forEach(removeBOMFromElement);
        }
    }

    removeBOMFromElement(document.body);
});


document.addEventListener('DOMContentLoaded', function() {
    const nav = document.querySelector('#nav');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
            nav.classList.add('fixed', 'top-0');
        } else {
            nav.classList.remove('fixed', 'top-0');
        }
    });
});
