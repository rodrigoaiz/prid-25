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