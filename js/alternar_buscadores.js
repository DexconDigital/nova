$(document).ready(function(){

    if(screen.width < 425) {
        $('.buscador1 > #codigo_buscar').removeAttr('id');
        $('.buscador1 > #buscar').removeAttr('id');


    } 

    if(screen.width > 426) {
        $('.boton_buscador1').remove();
    }
      


});
