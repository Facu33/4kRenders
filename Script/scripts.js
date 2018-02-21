var portfolio = document.getElementById('portfolio');
var contacto = document.getElementById('contacto');
var servicios = document.getElementById('servicios');
var nosotros = document.getElementById('nosotros');
var nombre = document.getElementById('nombre');
var email = document.getElementById('email');
var mensaje = document.getElementById('mensaje');

//MOSTRAR VENTANAS

function mostrar(num) {

    switch (num) {

        case 1:
            portfolio.style.margin = '0px 0px 0px 0px';
            break;
        case 2:
            contacto.style.margin = '0px 0px 0px 0px';
            break;
        case 3:
            servicios.style.margin = '0px 0px 0px 0px';
            break;
        case 4:
            nosotros.style.margin = '0px 0px 0px 0px';
            break;
    }
}

//CERRAR VENTANAS

function cerrar(num) {
    switch (num) {

        case 1:
            portfolio.style.margin = '500% 0px 0px 0px';
            break;
        case 2:
            contacto.style.margin = '500% 0px 0px 0px';
            nombre.value = "";
            mensaje.value = "";
            email.value = "";
            break;
        case 3:
            servicios.style.margin = '500% 0px 0px 0px';
            break;
        case 4:
            nosotros.style.margin = '500% 0px 0px 0px';
            break;
    }
}
//VENTANA MODAL MENSAJE , ENVIO DE CORREO
$(document).keyup(function (e) {
    if (e.which === 27) {
        $('#result').remove();
    }
});
$(document).ready(function () {
    $('#form, #fat, #form').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function () {
                document.getElementById('result').style.display = 'block';
                document.getElementById('cerrarContacto').style.display = 'none';
            }
        });
        return false;
    });
});
function cerrarModal() {
    document.getElementById('result').style.display = 'none';
    document.getElementById('cerrarContacto').style.display = 'block';

}




