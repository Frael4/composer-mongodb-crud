const preview = document.getElementById('image-preview')
const foto = document.getElementById('foto');

document.addEventListener('DOMContentLoaded', () => {
    events();
    cargarImagenPreview()

    // Tooltip 
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    /* Toast*/
    var toastElList = [].slice.call(document.querySelectorAll('.toast'))
    var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl)
    })

    toastList.forEach(toast => toast.show())
});

const events = () => {
    document.getElementById('image-preview').addEventListener('click', () => {
        foto.click();
    })
}

const cargarImagenPreview = () => {

    foto.addEventListener('change', function () {
        var imagen = this.files[0];
        var imagenCodificada = URL.createObjectURL(imagen)
        preview.src = imagenCodificada;
    })
}