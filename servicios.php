<?php require 'variables/variables.php';
$page = "Servicios" ?>
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
    <header>
        <?php include 'layout/header.php' ?>
    </header>
    <!-- HEADER -->

    <!-- BANNER -->
    <section id="banner" class="position-relative">

        <div class="imagen_servicios position-absolute w-100 h-100"></div>
        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="blanco w-100 h-100 d-flex align-items-center justify-content-center contenido position-relative">

            <h1 class="font-weight-bold"> SERVICIOS </h1>

        </div>

    </section>
    <!-- BANNER -->


    <!-- SERVICIOS -->
    <section id="servicios2" class="container mt-5">


        <div class="d-flex">

            <!-- CARD -->
            <div class="servicio col-4 d-flex align-items-center flex-column">

                <div class="d-flex align-items-center justify-content-center contenedor_icono">
                    <i class="icono <?php echo $iconos_servicios['arriendos'] ?>"> </i>
                </div>

                <div class="d-flex align-items-center justify-content-center flex-column contenedor_texto position-relative">
                    <h4 class="text-center mb-3"> <?php echo $texto_servicios['arriendos']['titulo'] ?> </h4>
                    <p class="text-justify px-3 pb-5"> <?php echo $texto_servicios['arriendos']['parrafo'] ?> </p>
                </div>

            </div>
            <!-- CARD -->

            <!-- CARD -->
            <div class="servicio col-4 d-flex align-items-center flex-column">

                <div class="d-flex align-items-center justify-content-center contenedor_icono">
                    <i class="icono <?php echo $iconos_servicios['ventas'] ?>"> </i>
                </div>

                <div class="d-flex align-items-center justify-content-center flex-column contenedor_texto position-relative">
                    <h4 class="text-center mb-3"> <?php echo $texto_servicios['ventas']['titulo'] ?> </h4>
                    <p class="text-justify px-3 pb-5"> <?php echo $texto_servicios['ventas']['parrafo'] ?> </p>
                </div>

            </div>
            <!-- CARD -->

            <!-- CARD -->
            <div class="servicio col-4 d-flex align-items-center flex-column">

                <div class="d-flex align-items-center justify-content-center contenedor_icono">
                    <i class="icono <?php echo $iconos_servicios['avaluos'] ?>"> </i>
                </div>

                <div class="d-flex align-items-center justify-content-center flex-column contenedor_texto position-relative">
                    <h4 class="text-center mb-3"> <?php echo $texto_servicios['avaluos']['titulo'] ?> </h4>
                    <p class="text-justify px-3 pb-5"> <?php echo $texto_servicios['avaluos']['parrafo'] ?> </p>
                </div>

            </div>
            <!-- CARD -->

        </div>

    </section>
    <!-- SERVICIOS -->

    <!-- SOLICITUD/CONSIGNA TU INMUEBLE -->
    <section id="solicitud_inmueble" class="position-relative  mb-n5">

        <!-- <div class="position-absolute w-100 h-100 imagen"></div> -->
        <div class="position-absolute w-100 h-100 fondo"></div>

        <div class="position-relative contenido d-flex align-items-center justify-content-center">
            <div class="mr-5"> <a href="solicitar_inmueble.php" class="btn boton_footer"> Solicitud de Inmueble </a></div>
            <div> <a href="consignar_inmueble.php" class="btn boton_footer"> Consiga tu Inmueble </a></div>
        </div>

    </section>
    <!-- SOLICITUD/CONSIGNA TU INMUEBLE -->










    <!-- FOOTER -->
    <footer class="mt-5">
        <?php include 'layout/footer.php' ?>
    </footer>
    <!-- FOOTER -->

    <!-- ARCHIVOS FOOTER -->
    <section>
        <?php include 'layout/archivos_footer.php' ?>
    </section>
    <!-- ARCHIVOS FOOTER -->


</body>

</html>