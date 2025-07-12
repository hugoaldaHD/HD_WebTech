document.addEventListener('DOMContentLoaded', function () {
    const asuntoSelect = document.getElementById('asunto');
    const servicioContainer = document.getElementById('servicio-container');
    const servicioSelect = document.getElementById('servicio');

    function toggleServicio() {
        if (asuntoSelect.value === 'Pedido') {
            servicioContainer.style.display = 'block';
            servicioSelect.setAttribute('required', 'required');
        } else {
            servicioContainer.style.display = 'none';
            servicioSelect.removeAttribute('required');
            servicioSelect.value = ''; // limpiar selección si se oculta
        }
    }

    // Ejecutar al cargar la página
    toggleServicio();

    // Ejecutar cuando cambie el select asunto
    asuntoSelect.addEventListener('change', toggleServicio);
});