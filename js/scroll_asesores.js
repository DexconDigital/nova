$(document).ready(function(){


    // SCROLL ANIMADO A LOS ASESORES
    $(document).scroll(function(){

        $('#boton_ver_asesores').on('click', function(){

            $('html,body').stop().animate({scrollTop: 2704}, 1500);

        });

        // console.log($(document).scrollTop());

    });
    // SCROLL ANIMADO A LOS ASESORES

    //ANIMAR VALORES
    $(document).scroll(function(){


        // ANIMACION DE IMAGEN Y VALORES
        if($(document).scrollTop() > 1100 ) {

            $('#valores').css({animation: 'animacion_valores 1.5s ease-out forwards'});

        }
        // ANIMACION DE IMAGEN Y VALORES


        //ANIMACION DEL TEXTO DE LOS VALORES
        if($(document).scrollTop() > 1250 ) {

            $('#texto_valores').css({animation: 'animacion_texto_valores 3s forwards'});

        }
        //ANIMACION DEL TEXTO DE LOS VALORES

    });
    //ANIMAR VALORES

        //ANIMAR VALORES2
        $(document).scroll(function(){


            // ANIMACION DE IMAGEN Y VALORES
            if($(document).scrollTop() > 2000 ) {
    
                $('#valores2').css({animation: 'animacion_valores 1.5s ease-out forwards'});
    
            }
            // ANIMACION DE IMAGEN Y VALORES
    
    
            //ANIMACION DEL TEXTO DE LOS VALORES
            if($(document).scrollTop() > 2000    ) {
    
                $('#texto_valores2').css({animation: 'animacion_texto_valores 3s forwards'});
    
            }
            //ANIMACION DEL TEXTO DE LOS VALORES
    
        });
        //ANIMAR VALORES2

    

});