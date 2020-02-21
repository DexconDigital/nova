$(document).ready(function(){

    $('#boton_minimizar_maximizar').on('click',function(){

        if($('#boton_minimizar_maximizar>.icono').hasClass('fa-times')) {

            $('#buscador>.container').animate({top:'188px'},'fast');
            $('#boton_minimizar_maximizar>.icono').removeClass('fa-times');
            $('#boton_minimizar_maximizar>.icono').addClass('fa-angle-up');
        } else {

            $('#buscador>.container').animate({top:'0'},'fast');
            $('#boton_minimizar_maximizar>.icono').addClass('fa-times');
            $('#boton_minimizar_maximizar>.icono').removeClass('fa-angle-up');

        }

    });

    // <i class="fas fa-angle-up"></i>


});