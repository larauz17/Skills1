$(document).ready(function() {
   
    abrirModal();
    var table = $('#usuariosTable').DataTable({
        "language": {
            "search": "Buscar por ID:" // Cambia el texto del buscador aquí
        }
    });

    // Agrega un evento de cambio al campo de búsqueda
    $('#usuariosTable_filter input').on('keyup', function() {
        // Obtén el valor del campo de búsqueda
        var id = $(this).val();

        // Filtra la primera columna (índice 0) por el valor del ID
        table.column(0).search(id).draw();
    });
});

function abrirModal() {
    $('#cookies').modal('show');
}

function inscripcio(pass) {
    var pass = $("#password").val();
    $.ajax({
        url: "index.php?r=accessinscripcio",
        method: "GET",
        data: { pass: pass },
        success: function (data) {
            window.location = "index.php?r=seeinscripcio";        },
        error: function (error) {
            $("#mensajeError").html("Contrasenya incorrecta.");
            // Muestra el div
            $("#mensajeError").show();
        }
    });
}