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

            <h1 class="font-weight-bold"> Nosotros </h1>

        </div>

    </section>
    <!-- BANNER -->

    <!-- CARDS RESEÑA HISTORICA, MISION Y VISION -->
    <section id="mision_vision" class="mt-5 container d-flex flex-wrap justify-content-center">

        <!-- MISION -->
        <div class="col-12 col-md-6 col-lgl-6 col-xl-6 mb-5">

            <div class="border p-3 position-relative carta d-flex flex-column align-items-center justify-content-center">

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
        <div class="col-12 col-md-6 col-lgl-6 col-xl-6 mb-5">

            <div class="h-100 border p-3 position-relative carta d-flex flex-column align-items-center">

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
        <div class="col-12 col-md-6 col-lgl-6 col-xl-6 mb-5">

            <div class="border p-3 position-relative carta d-flex flex-column align-items-center justify-content-center">

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

            <div id="boton_ver_asesores" class="mt-3 w-100 d-flex align-items-center justify-content-center"><a href="contactenos.php" class="btn boton_footer"> Contáctanos </a></div>

        </div>


    </section>
    <!-- ¿BUSCAS TU INMUEBLE IDEAL? -->


    <h2 class="text-center font-weight-bold mt-5"> Valores Corporativos </h2>

    <!-- VALORES -->
    <section id="valores" class="d-none d-lg-flex d-md-flex d-xl-flex container position-relative align-items-center justify-content-center">



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

    <!-- VALORES (RESPONSIVE)-->
    <section id="valores2" class="container position-relative d-flex d-md-none d-lg-none d-xl-none  align-items-center justify-content-center">

        <div class="position-relative circulo d-flex align-items-center justify-content-center flex-wrap">


            <div class="after caja_icono1 col-12 position-relative d-flex align-items-center justify-content-center">

                <h4 style="right:62%" class="position-absolute magenta"> Lealtad </h4>

                <div class="d-flex align-items-center justify-content-center caja ">
                    <i class="icono magenta <?php echo $iconos_nosotros['valores']['lealtad'] ?>"></i>
                </div>

            </div>

            <div class="after caja_icono2 col-12 position-relative d-flex align-items-center justify-content-center">


                <div class="d-flex align-items-center justify-content-center caja ">
                    <i class="icono magenta <?php echo $iconos_nosotros['valores']['respeto'] ?>"></i>
                </div>

                <h4 style="left:62%" class="position-absolute magenta"> Respeto </h4>
            </div>


            <div class="after caja_icono3 col-12 position-relative d-flex flex-column align-items-center justify-content-center">

                <h4 style="right:62%" class="position-absolute magenta mb-2"> Honestidad </h4>

                <div class="d-flex align-items-center justify-content-center caja ">
                    <i class="icono magenta <?php echo $iconos_nosotros['valores']['honestidad'] ?>"></i>
                </div>

            </div>


            <div class="after caja_icono4 col-12 position-relative d-flex align-items-center justify-content-center">


                <div class="d-flex align-items-center justify-content-center caja ">
                    <i class="icono magenta <?php echo $iconos_nosotros['valores']['responsabilidad'] ?>"></i>
                </div>

                <h4 style="left:62%" class="position-absolute magenta"> Responsabilidad </h4>
            </div>


            <div class="after caja_icono5 col-12 position-relative d-flex align-items-center justify-content-center">

                <h4 style="right:62%" class="position-absolute magenta"> Pertenencia </h4>

                <div class="d-flex align-items-center justify-content-center caja ">
                    <i class="icono magenta <?php echo $iconos_nosotros['valores']['pertenencia'] ?>"></i>
                </div>

            </div>


        </div>

        <div style="height:230px" class="position-absolute imagen">
            <img class="w-100 h-100" src="images/edificio.png" alt="">
        </div>

    </section>
    <!-- VALORES (RESPONSIVE)-->


    <!-- TEXTO DESCRIPTIVO DE LOS VALORES -->
    <p id="texto_valores" class="d-none d-md-block d-lg-block d-xl-block container mt-3"> <?php echo $texto_quienes_somos['valores']['parrafos']['5'] ?> </p>
    <!-- TEXTO DESCRIPTIVO DE LOS VALORES -->

    <!-- TEXTO DESCRIPTIVO DE LOS VALORES (RESPONSIVE)-->
    <p id="texto_valores2" class="text-justify d-block d-md-none d-lg-none d-xl-none container"> <?php echo $texto_quienes_somos['valores']['parrafos']['5'] ?> </p>
    <!-- TEXTO DESCRIPTIVO DE LOS VALORES (RESPONSIVE)-->


    <!-- ALIADOS -->
    <section id="aliados" style="margin: 6rem 0" class="d-none d-md-block d-lg-block d-xl-block position-relative py-5">

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

    <!-- ALIADOS (RESPONSIVE)-->
    <section id="aliados2" style="margin: 6rem 0" class="d-block d-md-none d-lg-none d-xl-none position-relative py-5">

        <div class="position-absolute w-100 h-100 imagen"></div>

        <div class="position-absolute w-100 h-100 fondo_negro"></div>

        <h2 class="blanco font-weight-bold text-center position-relative my-5"> Nuestros <span class="magenta">Aliados</span> </h2>

        <div class="container position-relative">

            <div id="carrusel_aliados2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner h-100">

                    <div class="carousel-item h-100 active" data-interval="10000">
                        <div class=" col-10 m-auto">
                            <div class="caja_imagen d-flex align-items-center justify-content-center p-0">
                                <img src="<?php echo $logos_aliados['0'] ?>" class="libertador h-auto d-block" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100" data-interval="10000">
                        <div class=" col-10 m-auto">
                            <div class="caja_imagen d-flex align-items-center justify-content-center p-0">
                                <img src="<?php echo $logos_aliados['1'] ?>" class="bordes h-auto d-block" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100" data-interval="10000">
                        <div class=" col-10 m-auto">
                            <div class="caja_imagen d-flex align-items-center justify-content-center p-0">
                                <img src="<?php echo $logos_aliados['2'] ?>" class="bordes h-auto d-block" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100" data-interval="10000">
                        <div class=" col-10 m-auto">
                            <div class="caja_imagen d-flex align-items-center justify-content-center p-0">
                                <img src="<?php echo $logos_aliados['3'] ?>" class="bordes h-auto d-block" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100" data-interval="10000">
                        <div class=" col-10 m-auto">
                            <div class="caja_imagen d-flex align-items-center justify-content-center p-0">
                                <img src="<?php echo $logos_aliados['4'] ?>" class="bordes h-auto d-block" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100" data-interval="10000">
                        <div class=" col-10 m-auto">
                            <div class="caja_imagen d-flex align-items-center justify-content-center p-0">
                                <img src="<?php echo $logos_aliados['5'] ?>" class="bordes h-auto d-block" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100" data-interval="10000">
                        <div class=" col-10 m-auto">
                            <div class="caja_imagen d-flex align-items-center justify-content-center p-0">
                                <img src="<?php echo $logos_aliados['6'] ?>" class="bordes h-auto d-block" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item h-100" data-interval="10000">
                        <div class=" col-10 m-auto">
                            <div class="caja_imagen d-flex align-items-center justify-content-center p-0">
                                <img src="<?php echo $logos_aliados['7'] ?>" class="bordes h-auto d-block" alt="...">
                            </div>
                        </div>
                    </div>


                </div>

                <a class="btn boton2 izquierda_aliados" href="#carrusel_aliados2" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </a>

                <a class="btn boton2 derecha_aliados" href="#carrusel_aliados2" role="button" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </a>


            </div>
        </div>

    </section>
    <!-- ALIADOS (RESPONSIVE)-->

    <!-- BANNER DE ESTADISTICAS -->
    <section id="banner_estadisticas" class="overflow-hidden position-relative py-5 mt-5">

        <!-- IMAGEN DE FONDO -->
        <div class="position-absolute w-100 h-100 imagen"> </div>
        <!-- IMAGEN DE FONDO -->

        <!-- OPACIDAD DE LA IMAGEN -->
        <div class="position-absolute w-100 h-100 fondo_negro"></div>
        <!-- OPACIDAD DE LA IMAGEN -->

        <!-- ICONOS -->
        <div id="contador" class="contenido container position-relative d-flex flex-wrap align-items-center justify-content-around w-100 h-100 blanco">


            <!-- ICONO 1 -->
            <div id="animacion1" class="col-6 col-md-4 col-lg-3 col-xl-3 contenido_cards d-flex flex-column align-items-center justify-content-center">

                <div class="border mb-2 d-flex align-items-center justify-content-center caja_icono">
                    <p id="counter-propertys" class="icono font-weight-bold magenta"> </p>
                </div>

                <p class="mb-2 negro text-center text-md-start text-lg-start text-xl-start"> Total de Inmuebles </p>


            </div>
            <!-- ICONO 1 -->


            <!-- ICONO 2 -->
            <div id="animacion2" class="col-6 col-md-4 col-lg-3 col-xl-3 contenido_cards d-flex flex-column align-items-center justify-content-center">

                <div class="border mb-2 d-flex align-items-center justify-content-center caja_icono">
                    <p id="counter-rent" class="icono font-weight-bold magenta"> </p>

                </div>

                <p class="mb-2 negro text-center text-md-start text-lg-start text-xl-start"> Total en Arriendo </p>


            </div>
            <!-- ICONO 2 -->


            <!-- ICONO 3 -->
            <div id="animacion3" class="col-6 col-md-4 col-lg-3 col-xl-3 contenido_cards d-flex flex-column align-items-center justify-content-center">

                <div class="border mb-2 d-flex align-items-center justify-content-center caja_icono">
                    <p id="counter-sale" class="icono font-weight-bold magenta"> </p>

                </div>

                <p class="mb-2 negro text-center text-md-start text-lg-start text-xl-start"> Total en Venta </p>


            </div>
            <!-- ICONO 3 -->


            <!-- ICONO 4 -->
            <div id="animacion4" class="col-6 col-md-4 col-lg-3 col-xl-3 contenido_cards d-flex flex-column align-items-center justify-content-center">

                <div class="border mb-2 d-flex align-items-center justify-content-center caja_icono">
                    <p id="counter-sale-rent" class="icono font-weight-bold magenta"> </p>
                </div>

                <p class="mb-2 negro text-center text-md-start text-lg-start text-xl-start"> Total en Arriendo/Venta </p>

            </div>
            <!-- ICONO 4 -->


        </div>
        <!-- ICONOS -->


    </section>
    <!-- BANNER DE ESTADISTICAS -->








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

    <script src=js/scroll_asesores.js> </script> <script src="js/banner_estadisticas.js"></script>
    <script src="js/countUp.min.js"></script>
    <script src="js/counter-propertys.js"></script>
    <script src="conexion_api/token_api.js"></script>

</body>

</html>