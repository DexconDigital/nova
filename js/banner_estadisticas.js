$(document).ready(function(){

    $(window).scroll(function(){

        console.log($(window).scrollTop());

        if($(window).scrollTop() > 2414) {

            $('#animacion1').css({animation: 'animacion1 1.5s forwards'});
            $('#animacion2').css({animation: 'animacion2 1.5s forwards'});
            $('#animacion3').css({animation: 'animacion3 1.5s forwards'});
            $('#animacion4').css({animation: 'animacion4 1.5s forwards'});
        }

    });


});