<?php require 'variables/variables.php';
$page = "Nosotros" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivos_header.php' ?>

    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>

<body>

    <!-- HEADER -->
    <?php include 'layout/header.php' ?>
    <!-- HEADER -->


    <!-- BANNER -->
    <section id="banner" class="position-relative">

        <div class="imagen position-absolute w-100 h-100"></div>
        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="blanco w-100 h-100 d-flex align-items-center justify-content-center contenido position-relative">

            <h1 class="font-weight-bold"> NOSOTROS </h1>

        </div>

    </section>
    <!-- BANNER -->

    <!-- CARDS RESEÑA HISTORICA, MISION Y VISION -->
    <section id="mision_vision" class="mt-5 container d-flex flex-wrap justify-content-center">

        <!-- MISION -->
        <div class="col-6">

            <div class="p-3 position-relative carta d-flex flex-column align-items-center justify-content-center">

                <div class="mb-2 d-flex align-items-center justify-content-center caja_icono">
                    <i class="blanco fas fa-calendar-check"></i>
                </div>

                <div class="cuerpo">
                    <h4 class="text-center w-100 my-2 font-weight-bold"> <?php echo $texto_quienes_somos['mision']['titulo'] ?> </h4>
                    <p class="text-justify"> <?php echo $texto_quienes_somos['mision']['parrafo'] ?> </p>
                </div>

            </div>

        </div>
        <!-- MISION -->

        <!-- VISION -->
        <div class="col-6">

            <div class="h-100 p-3 position-relative carta d-flex flex-column align-items-center">

                <div class="mb-2 d-flex align-items-center justify-content-center caja_icono">
                    <i class="blanco <?php echo $iconos_nosotros['vision'] ?>"></i>
                </div>

                <div class="cuerpo">
                    <h4 class="text-center w-100 my-2 font-weight-bold"> <?php echo $texto_quienes_somos['vision']['titulo'] ?> </h4>
                    <p class="text-justify"> <?php echo $texto_quienes_somos['vision']['parrafo'] ?> </p>
                </div>

            </div>

        </div>
        <!-- VISION -->

        <!-- RESEÑA HOSTORICA -->
        <div class="col-6 mt-5">

            <div class="p-3 position-relative carta d-flex flex-column align-items-center justify-content-center">

                <div class="mb-2 d-flex align-items-center justify-content-center caja_icono">
                    <i class="blanco <?php echo $iconos_nosotros['reseña'] ?>"></i>
                </div>

                <div class="cuerpo">
                    <h4 class="text-center w-100 my-2 font-weight-bold"> <?php echo $texto_quienes_somos['quienes_somos']['titulo'] ?> </h4>
                    <p class="text-justify"> <?php echo $texto_quienes_somos['quienes_somos']['parrafo'] ?> </p>
                </div>

            </div>

        </div>
        <!-- RESEÑA HOSTORICA -->


    </section>
    <!-- CARDS RESEÑA HISTORICA, MISION Y VISION -->

    <!-- ¿BUSCAS TU INMUEBLE IDEAL? -->
    <section id="buscas_inmueble" class="py-5 mt-5">

        <div class="blanco container">
            <h2 class="font-weight-bold text-center w-100"> ¿Buscas tu inmueble ideal? </h2>

            <p class="mt-2 text-center"> Contamos con personal talentoso y comprometido dispuesto a ayudarte a cumplir con tus necesidades inmobiliarias </p>

            <div class="mt-3 w-100 d-flex align-items-center justify-content-center"><a href="" class="btn boton2"> Ver asesores </a></div>

        </div>


    </section>
    <!-- ¿BUSCAS TU INMUEBLE IDEAL? -->

    <!-- VALORES -->
    <section id="valores" class="container position-relative d-flex align-items-center justify-content-center">


        <div class="position-relative circulo">

            <div class="d-flex align-items-center justify-content-center caja_icono"> 
                <i class="icono magenta <?php echo $iconos_nosotros['valores']['lealtad'] ?>"></i>
            </div>


        </div>

        <div class="position-absolute imagen">
            <img class="w-100 h-100" src="images/edificio.png" alt="">
        </div>






    </section>
    <!-- VALORES -->






    <!-- FOOTER -->
    <section>
        <?php include 'layout/footer.php' ?>
    </section>
    <!-- FOOTER -->

    <!-- ARCHIVOS FOOTER -->
    <section>
        <?php include 'layout/archivos_footer.php' ?>
    </section>
    <!-- ARCHIVOS FOOTER -->


</body>

</html>