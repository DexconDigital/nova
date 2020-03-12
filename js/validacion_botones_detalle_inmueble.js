$(document).ready(function(){

    $('.b1').on('click', function(){

        if(!$('#uno').hasClass('show')) {

            $('.b1').addClass('activo2');
            $('.b2').removeClass('activo2');
            $('.b3').removeClass('activo2');
            $('.b4').removeClass('activo2');
            $('.b5').removeClass('activo2');


    
        } else {
            $('.b1').removeClass('activo2');
        }

    });

    $('.b2').on('click', function(){

        if(!$('#dos').hasClass('show')) {

            $('.b2').addClass('activo2');
            $('.b1').removeClass('activo2');
            $('.b3').removeClass('activo2');
            $('.b4').removeClass('activo2');
            $('.b5').removeClass('activo2');

    
        } else {
            $('.b2').removeClass('activo2');
        }

    });

    $('.b3').on('click', function(){

        if(!$('#tres').hasClass('show')) {

            $('.b3').addClass('activo2');
            $('.b1').removeClass('activo2');
            $('.b2').removeClass('activo2');
            $('.b4').removeClass('activo2');
            $('.b5').removeClass('activo2');

    
        } else {
            $('.b3').removeClass('activo2');
        }

    });

    $('.b4').on('click', function(){

        if(!$('#cuatro').hasClass('show')) {

            $('.b4').addClass('activo2');
            $('.b1').removeClass('activo2');
            $('.b2').removeClass('activo2');
            $('.b3').removeClass('activo2');
            $('.b5').removeClass('activo2');
    
        } else {
            $('.b4').removeClass('activo2');
        }

    });

    $('.b5').on('click', function(){

        if(!$('#cinco').hasClass('show')) {

            $('.b5').addClass('activo2');
            $('.b1').removeClass('activo2');
            $('.b2').removeClass('activo2');
            $('.b3').removeClass('activo2');
            $('.b4').removeClass('activo2');
    
        } else {
            $('.b5').removeClass('activo2');
        }

    });



});