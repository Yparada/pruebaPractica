$(document).ready(function () {

    $('#btnguardar').click(function (e) {
        e.preventDefault();
        var datos = $('#aplicacion-form').serialize();

        $.ajax({
            type: 'POST',
            url: 'formulario-add.php',
            data: datos,
            success: function (r) {
                alert(r);
                if (r === 'Agregado con exito') {
                    $('#aplicacion-form').trigger('reset');
                }
            }
        });
    });
});