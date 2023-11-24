
document.addEventListener("DOMContentLoaded", function() {
    ejecucionAutomatica("consulta");
});

function ejecucionAutomatica(id) {
    let idForm = document.getElementById(id);
    if (idForm) {
        idForm.submit();
    }
}