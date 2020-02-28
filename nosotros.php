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

        <div class="imagen_nosotros position-absolute w-100 h-100"></div>
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

            <div id="boton_ver_asesores" class="mt-3 w-100 d-flex align-items-center justify-content-center"><a class="btn boton_footer"> Ver asesores </a></div>

        </div>


    </section>
    <!-- ¿BUSCAS TU INMUEBLE IDEAL? -->


    <h2 class="text-center font-weight-bold mt-5"> Valores Corporativos </h2>

    <!-- VALORES -->
    <section id="valores" class="container position-relative d-flex align-items-center justify-content-center">



        <div class="position-relative circulo">


            <div class="caja_icono1 position-absolute d-flex align-items-center">

                <h4 class="magenta mr-2"> Lealtad </h4>

                <div class="d-flex align-items-center justify-content-center caja ">
                    <i class="icono magenta <?php echo $iconos_nosotros['valores']['lealtad'] ?>"></i>
                </div>

            </div>

            <div class="caja_icono2 position-absolute d-flex align-items-center">

                <h4 class="magenta mr-2"> Respeto </h4>

                <div class="d-flex align-items-center justify-content-center caja ">
                    <i class="icono magenta <?php echo $iconos_nosotros['valores']['respeto'] ?>"></i>
                </div>

            </div>


            <div class="caja_icono3 position-absolute d-flex flex-column align-items-center">

                <h4 class="magenta mb-2"> Honestidad </h4>

                <div class="d-flex align-items-center justify-content-center caja ">
                    <i class="icono magenta <?php echo $iconos_nosotros['valores']['honestidad'] ?>"></i>
                </div>

            </div>


            <div class="caja_icono4 position-absolute d-flex align-items-center">


                <div class="d-flex align-items-center justify-content-center caja ">
                    <i class="icono magenta <?php echo $iconos_nosotros['valores']['responsabilidad'] ?>"></i>
                </div>

                <h4 class="magenta ml-2"> Responsabilidad </h4>
            </div>


            <div class="caja_icono5 position-absolute d-flex align-items-center">


                <div class="d-flex align-items-center justify-content-center caja ">
                    <i class="icono magenta <?php echo $iconos_nosotros['valores']['pertenencia'] ?>"></i>
                </div>

                <h4 class="magenta ml-2"> Pertenencia </h4>
            </div>





        </div>

        <div class="position-absolute imagen">
            <img class="w-100 h-100" src="images/edificio.png" alt="">
        </div>

    </section>
    <!-- VALORES -->


    <!-- TEXTO DESCRIPTIVO DE LOS VALORES -->
    <h5 id="texto_valores" class="container text-center mt-3"> <?php echo $texto_quienes_somos['valores']['parrafos']['5'] ?> </h5>
    <!-- TEXTO DESCRIPTIVO DE LOS VALORES -->


    <!-- ALIADOS -->
    <section id="aliados" class="position-relative py-5 mt-5">

        <div class="position-absolute w-100 h-100 imagen"></div>

        <div class="position-absolute w-100 h-100 fondo_negro"></div>

        <h2 class="blanco font-weight-bold text-center position-relative my-5"> Nuestros <span class="magenta">Aliados</span> </h2>

        <div class="container position-relative">

            <div id="carrusel_aliados" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner h-100">

                    <div class="carousel-item h-100 active" data-interval="10000">

                        <div class="d-flex align-items-center justify-content-center h-100">

                            <div class=" col-3">
                                <div class="caja_imagen d-flex align-items-center justify-content-center m-auto p-0">
                                    <img src="<?php echo $logos_aliados['0'] ?>" class="libertador h-auto d-block" alt="...">
                                </div>
                            </div>

                            <div class=" col-3">
                                <div class="caja_imagen d-flex align-items-center justify-content-center m-auto p-0">
                                    <img src="<?php echo $logos_aliados['1'] ?>" class="bordes h-auto d-block" alt="...">
                                </div>
                            </div>

                            <div class=" col-3">
                                <div class="caja_imagen d-flex align-items-center justify-content-center m-auto p-0">
                                    <img src="<?php echo $logos_aliados['2'] ?>" class="bordes h-auto d-block" alt="...">
                                </div>
                            </div>

                            <div class=" col-3">
                                <div class="caja_imagen d-flex align-items-center justify-content-center m-auto p-0">
                                    <img src="<?php echo $logos_aliados['3'] ?>" class="bordes h-auto d-block" alt="...">
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="carousel-item h-100" data-interval="10000">

                        <div class="d-flex align-items-center justify-content-center h-100">

                            <div class=" col-3">
                                <div class="caja_imagen d-flex align-items-center justify-content-center m-auto p-0">
                                    <img src="<?php echo $logos_aliados['4'] ?>" class="bordes h-auto d-block" alt="...">
                                </div>
                            </div>

                            <div class=" col-3">
                                <div class="caja_imagen d-flex align-items-center justify-content-center m-auto p-0">
                                    <img src="<?php echo $logos_aliados['5'] ?>" class="bordes h-auto d-block" alt="...">
                                </div>
                            </div>

                            <div class=" col-3">
                                <div class="caja_imagen d-flex align-items-center justify-content-center m-auto p-0">
                                    <img src="<?php echo $logos_aliados['6'] ?>" class="bordes h-auto d-block" alt="...">
                                </div>
                            </div>

                            <div class=" col-3">
                                <div class="caja_imagen d-flex align-items-center justify-content-center m-auto p-0">
                                    <img src="<?php echo $logos_aliados['7'] ?>" class="bordes h-auto d-block" alt="...">
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <a class="btn boton2 izquierda_aliados" href="#carrusel_aliados" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </a>

                <a class="btn boton2 derecha_aliados" href="#carrusel_aliados" role="button" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </a>


            </div>
        </div>

    </section>
    <!-- ALIADOS -->


    <!-- ASESORES -->
    <section id="asesores" class="pt-5">

        <h2 class="text-center font-weight-bold pt-5"> Conoce Nuestros Asesores </h2>

        <div class="d-flex flex-wrap mt-5 container">

            <!-- CARDS -->
            <div class="col-3 carta position-relative">

                <!-- IMAGEN ASESOR -->
                <img class="position-absolute w-100 h-100" src="images/asesor1.jpg" alt="">
                <!-- IMAGEN ASESOR -->

                <!-- NOMBRE ASESOR -->
                <div class="nombre_asesor blanco w-100 py-3 position-absolute">
                    <p class="text-center pr-3"> SERGIO ARENAS </p>
                </div>
                <!-- NOMBRE ASESOR -->

                <!-- CARD (HOVER) -->
                <div class="blanco d-flex align-items-center justify-content-center flex-column position-absolute caja_hover">

                    <!-- NOMBRE ASESOR -->
                    <p class="text-center pr-3 mb-2"> SERGIO ARENAS </p>
                    <!-- NOMBRE ASESOR -->

                    <!-- PUESTO ASESOR -->
                    <h4 class="magenta mb-5"> Gerente </h4>
                    <!-- PUESTO ASESOR -->

                    <!-- ICONOS DE REDES SOCIALES -->
                    <div class="d-flex">
                        <a href="#" class="mx-2 p-2 d-flex align-items-center justify-content-center caja_icono">
                            <i class="icono fab fa-facebook-f"> </i>
                        </a>

                        <a href="#" class="mx-2 p-2 d-flex align-items-center justify-content-center caja_icono">
                            <i class="icono fab fa-instagram"> </i>
                        </a>

                        <a href="#" class="mx-2 p-2 d-flex align-items-center justify-content-center caja_icono">
                            <i class="icono fab fa-twitter"> </i>
                        </a>

                    </div>
                    <!-- ICONOS DE REDES SOCIALES -->



                </div>
                <!-- CARD (HOVER) -->


            </div>
            <!-- CARDS -->

            <!-- CARDS -->
            <div class="col-3 carta position-relative">

                <!-- IMAGEN ASESOR -->
                <img class="position-absolute w-100 h-100" src="images/asesor2.jpg" alt="">
                <!-- IMAGEN ASESOR -->

                <!-- NOMBRE ASESOR -->
                <div class="nombre_asesor blanco w-100 py-3 position-absolute">
                    <p class="text-center pr-3"> MELANY CONTRERAS </p>
                </div>
                <!-- NOMBRE ASESOR -->

                <!-- CARD (HOVER) -->
                <div class="blanco d-flex align-items-center justify-content-center flex-column position-absolute caja_hover">

                    <!-- NOMBRE ASESOR -->
                    <p class="text-center pr-3 mb-2"> MELANY CONTRERAS </p>
                    <!-- NOMBRE ASESOR -->

                    <!-- PUESTO ASESOR -->
                    <h4 class="magenta mb-5"> Asesora </h4>
                    <!-- PUESTO ASESOR -->

                    <!-- ICONOS DE REDES SOCIALES -->
                    <div class="d-flex">
                        <a href="#" class="mx-2 p-2 d-flex align-items-center justify-content-center caja_icono">
                            <i class="icono fab fa-facebook-f"> </i>
                        </a>

                        <a href="#" class="mx-2 p-2 d-flex align-items-center justify-content-center caja_icono">
                            <i class="icono fab fa-instagram"> </i>
                        </a>

                        <a href="#" class="mx-2 p-2 d-flex align-items-center justify-content-center caja_icono">
                            <i class="icono fab fa-twitter"> </i>
                        </a>

                    </div>
                    <!-- ICONOS DE REDES SOCIALES -->



                </div>
                <!-- CARD (HOVER) -->


            </div>
            <!-- CARDS -->

            <!-- CARDS -->
            <div class="col-3 carta position-relative">

                <!-- IMAGEN ASESOR -->
                <img class="position-absolute w-100 h-100" src="images/asesor3.jpg" alt="">
                <!-- IMAGEN ASESOR -->

                <!-- NOMBRE ASESOR -->
                <div class="nombre_asesor blanco w-100 py-3 position-absolute">
                    <p class="text-center pr-3"> ROBERTO CASAS </p>
                </div>
                <!-- NOMBRE ASESOR -->

                <!-- CARD (HOVER) -->
                <div class="blanco d-flex align-items-center justify-content-center flex-column position-absolute caja_hover">

                    <!-- NOMBRE ASESOR -->
                    <p class="text-center pr-3 mb-2"> ROBERTO CASAS </p>
                    <!-- NOMBRE ASESOR -->

                    <!-- PUESTO ASESOR -->
                    <h4 class="magenta mb-5"> Jefe de Piso </h4>
                    <!-- PUESTO ASESOR -->

                    <!-- ICONOS DE REDES SOCIALES -->
                    <div class="d-flex">
                        <a href="#" class="mx-2 p-2 d-flex align-items-center justify-content-center caja_icono">
                            <i class="icono fab fa-facebook-f"> </i>
                        </a>

                        <a href="#" class="mx-2 p-2 d-flex align-items-center justify-content-center caja_icono">
                            <i class="icono fab fa-instagram"> </i>
                        </a>

                        <a href="#" class="mx-2 p-2 d-flex align-items-center justify-content-center caja_icono">
                            <i class="icono fab fa-twitter"> </i>
                        </a>

                    </div>
                    <!-- ICONOS DE REDES SOCIALES -->

                </div>
                <!-- CARD (HOVER) -->

            </div>
            <!-- CARDS -->

            <!-- CARDS -->
            <div class="col-3 carta position-relative">

                <!-- IMAGEN ASESOR -->
                <img class="position-absolute w-100 h-100" src="images/asesor4.jpg" alt="">
                <!-- IMAGEN ASESOR -->

                <!-- NOMBRE ASESOR -->
                <div class="nombre_asesor blanco w-100 py-3 position-absolute">
                    <p class="text-center pr-3"> LUIS ORTIZ </p>
                </div>
                <!-- NOMBRE ASESOR -->

                <!-- CARD (HOVER) -->
                <div class="blanco d-flex align-items-center justify-content-center flex-column position-absolute caja_hover">

                    <!-- NOMBRE ASESOR -->
                    <p class="text-center pr-3 mb-2"> LUIS ORTIZ </p>
                    <!-- NOMBRE ASESOR -->

                    <!-- PUESTO ASESOR -->
                    <h4 class="magenta mb-5"> Administrador </h4>
                    <!-- PUESTO ASESOR -->

                    <!-- ICONOS DE REDES SOCIALES -->
                    <div class="d-flex">
                        <a href="#" class="mx-2 p-2 d-flex align-items-center justify-content-center caja_icono">
                            <i class="icono fab fa-facebook-f"> </i>
                        </a>

                        <a href="#" class="mx-2 p-2 d-flex align-items-center justify-content-center caja_icono">
                            <i class="icono fab fa-instagram"> </i>
                        </a>

                        <a href="#" class="mx-2 p-2 d-flex align-items-center justify-content-center caja_icono">
                            <i class="icono fab fa-twitter"> </i>
                        </a>

                    </div>
                    <!-- ICONOS DE REDES SOCIALES -->

                </div>
                <!-- CARD (HOVER) -->

            </div>
            <!-- CARDS -->


        </div>
    </section>
    <!-- ASESORES -->






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

    <script src=js/scroll_asesores.js> </script> </body> </html>