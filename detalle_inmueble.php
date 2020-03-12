<?php require 'variables/variables.php';
require 'controllers/detalleInmuebleController.php';

$page = "Detalle de Inmueble" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivos_header.php' ?>
    <link rel="stylesheet" href="css/carousel.tamanos.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">

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

        <div class="imagen position-absolute w-100 h-100"></div>
        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="blanco w-100 h-100 d-flex align-items-center justify-content-center contenido position-relative">

            <h1 class="font-weight-bold"> Detalle de Inmueble </h1>

        </div>

    </section>
    <!-- BANNER -->

    <h2 class="text-center font-weight-bold mt-5"> Conoce en Detalle el Inmueble </h2>

    <!-- PRECIO Y CARACTERISTICAS PRINCIPALES INMUEBLE -->
    <div id="caracteristicas_principales" class="container align-items-stretch d-flex mt-5 mb-n3">

        <div class="precio p-3">
            <p class="blanco"> <?php if ($r['Gestion'] == 'Arriendo') {
                                    echo '<span class="precio">$ ' . $r['ValorCanon'] . '</span>';
                                } else if ($r['Gestion'] == 'Venta') {
                                    echo '<span class="precio">$ ' . $r['ValorVenta'] . '</span>';
                                } else {
                                    echo '<span class="precio">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</span>';
                                }
                                ?> </p>
        </div>

        <div class="border-top d-flex align-items-center">
            <p class="text-muted px-2"> Código: <?php echo $co; ?> </p>
        </div>

        <div class="border-left px-2 border-top d-flex align-items-center">
            <i class="azul mr-2 fas fa-chart-area"></i>
            <p> <?php echo $area_construida; ?> <sup>2</sup> </p>
        </div>

        <div class="border-left px-2 border-top d-flex align-items-center">
            <i class="azul mr-2 fas fa-bed"></i>
            <p> <?php echo $alcobas; ?> </p>
        </div>

        <div class="border-left px-2 border-top d-flex align-items-center">
            <i class="azul mr-2 fas fa-bath"></i>
            <p> <?php echo $banios; ?> </p>
        </div>

        <div class="border-left px-2 border-top d-flex align-items-center">
            <i class="azul mr-2 fas fa-warehouse"></i>
            <p> <?php echo $garaje; ?> </p>
        </div>

        <div class="border-left px-2 border-top d-flex align-items-center">
            <i class="azul mr-2 fas fa-user-tie"></i>
            <p> <?php if ($administracion != "") {
                    echo 'Administración: $' . $administracion . '</li>';
                } ?>
            </p>
        </div>

        <div class="border-left px-2 border-top d-flex align-items-center">
            <i class="azul mr-2 far fa-clock"></i>
            <p> <?php echo $edad_inmueble; ?> Años </p>
        </div>

        <div class="border-left px-2 border-right border-top d-flex align-items-center">
            <i class="azul mr-2 fas fa-chart-line"></i>
            <p> <?php echo $estrato; ?> </p>
        </div>



    </div>
    <!-- PRECIO Y CARACTERISTICAS PRINCIPALES INMUEBLE -->


    <!-- CARRUSEL DE IMAGENES -->
    <section class="container">
        <!-- IMAGENES -->
        <section class="mt-3" id="slide-detalle">
            <?php
            if (isset($r['fotos'])) {
                for ($i = 0; $i < count($r['fotos']); $i++) {
                    echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                }
            } else {
                echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
            }
            ?>

        </section>
        <!-- IMAGENES -->


        <!-- MINIATURAS -->
        <section class="vertical-center-4 slider" id="miniaturas">
            <?php
            if (isset($r['fotos'])) {
                for ($i = 0; $i < count($r['fotos']); $i++) {
                    echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                }
            } else {
                echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
            }
            ?>
        </section>
        <!-- MINIATURAS -->

    </section>
    <!-- CARRUSEL DE IMAGENES -->


    <!-- DESCRIPCIÓN DE INMUEBLE -->
    <section id="descripcion_inmueble" class="container d-flex mt-5 flex-wrap">

        <div class="col-12">

            <!-- TIPO DE INMUEBLE / TIPO DE GESTIÓN -->
            <h4> <?php echo $r['Tipo_Inmueble'] ?> en <?php echo $r['Gestion']; ?> </h4>
            <!-- TIPO DE INMUEBLE / TIPO DE GESTIÓN -->


            <!-- DIRECCIÓN -->
            <div class="mt-2 d-flex align-items-baseline">
                <i class="mr-2 fas fa-map-marker-alt"></i>
                <p class="pb-2"> <?php echo $r['barrio'] . ', ' . $r['ciudad'] ?> </p>
            </div>
            <!-- DIRECCIÓN -->


            <!-- BOTONES CON CARACTERISTICAS DE INMUEBLE (MOBIL)-->
            <!-- <div id="accordion">
                <div class="container p-0">
                    <div class="col-12">

                        --------BOTONES--------

                        <div class="row">

                            <div class="col-12 p-0 mb-1">
                                <button class="btn b1 boton1 activo2 col-12 collapsed" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="false" aria-controls="collapseExample">
                                    Descripción
                                </button>
                            </div>

                            <div class="col-12 p-0 mb-1">
                                <button class="btn b2 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="true" aria-controls="dos">
                                    Características Internas
                                </button>
                            </div>

                            <div class="col-12 p-0 mb-1">
                                <button class="btn b3 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#tres" aria-expanded="true" aria-controls="dos">
                                    Características Externas
                                </button>
                            </div>

                            <div class="col-12 p-0 mb-1">
                                <button class="btn b4 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#cuatro" aria-expanded="true" aria-controls="dos">
                                    Características Alrededores
                                </button>
                            </div>

                        </div>

                        --------BOTONES--------

                        --------INFORMACION BOTONES--------


                        <div class="col-12 p-0">

                            <div class="">
                                <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">

                                    <p class="text-justify"> *Descripción del inmueble* Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae autem quos ipsam necessitatibus minus doloremque perferendis cupiditate porro id aspernatur. </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 p-0">
                            <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                                Características Internas

                            </div>
                        </div>

                        <div class="col-12 p-0">
                            <div id="tres" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                                Características Externas

                            </div>
                        </div>

                        <div class="col-12 p-0">
                            <div id="cuatro" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                                Características Alrededores

                            </div>
                        </div>



                    </div>

                    --------INFORMACION BOTONES--------

                </div>


            </div> -->
            <!-- BOTONES CON CARACTERISTICAS DE INMUEBLE(MOBIL) -->

            <!-- BOTONES CON CARACTERISTICAS DE INMUEBLE -->
            <div id="accordion" class="d-flex">


                <!----------BOTONES---------->
                <div class="container col-6 p-0">

                    <div class="col-12 row">


                        <div class="row col-12">

                            <div class="col-12 p-0 mb-1">
                                <button class="d-flex btn b1 boton1 activo2 col-12 collapsed" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="false" aria-controls="collapseExample">
                                    Descripción
                                </button>
                            </div>

                            <div class="col-12 p-0 mb-1">
                                <button class="d-flex btn b2 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="true" aria-controls="dos">
                                    Características
                                </button>
                            </div>

                            <div class="col-12 p-0 mb-1">
                                <button class="d-flex btn b3 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#tres" aria-expanded="true" aria-controls="dos">
                                    Características Internas
                                </button>
                            </div>

                            <div class="col-12 p-0 mb-1">
                                <button class="d-flex btn b4 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#cuatro" aria-expanded="true" aria-controls="dos">
                                    Características Externas
                                </button>
                            </div>

                            <div class="col-12 p-0 mb-1">
                                <button class="d-flex btn b5 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#cinco" aria-expanded="true" aria-controls="dos">
                                    Características Alrededores
                                </button>
                            </div>

                        </div>




                    </div>



                </div>
                <!----------BOTONES---------->



                <!----------INFORMACION BOTONES---------->

                <div class="col-6">

                    <div class="col-12 p-0">

                        <div class="">
                            <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">

                                <p class="text-justify"> <?php echo $descripcion ?> </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 p-0">
                        <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                            <h4 class="property-single-detail-title"> <strong>Características</strong></h4>
                            <ul class="lista">
                                <li>Código: <?php echo $co; ?></li>
                                <li>Alcobas: <?php echo $alcobas; ?></li>
                                <li>Baños: <?php echo $banios; ?></li>
                                <li>Área Construida: <?php echo $area_construida; ?>m<sup>2<sup></li>
                                <li>Área Privada: <?php echo $area_privada; ?>m<sup>2<sup></li>
                                <li>Garaje: <?php echo $garaje; ?></li>
                                <li>Estrato: <?php echo $estrato; ?></li>
                                <li>Edad Inmueble: <?php echo $edad_inmueble; ?> años</li>
                                <?php if ($administracion != "") {
                                    echo '<li>Administración: $' . $administracion . '</li>';
                                } ?>
                            </ul>

                        </div>
                    </div>

                    <div class="col-12 p-0">
                        <div id="tres" class="collapse" aria-labelledby="tres" data-parent="#accordion">

                            <?php
                            if (count($r['caracteristicasInternas']) > 0) {
                                echo
                                    '<div class="col-md-12" style="margin-bottom: 12px;">
                            <h4 class="property-single-detail-title"><strong>Características Internas</strong></h4>
                                <ul class="lista">';
                                for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>
                        </div>
                        ';
                            }
                            ?>

                        </div>
                    </div>

                    <div class="col-12 p-0">
                        <div id="cuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">

                            <?php
                            if (count($r['caracteristicasExternas']) > 0) {
                                echo
                                    '<div class="col-md-12" style="margin-bottom: 12px;">
                            <h4 class="property-single-detail-title"><strong>Características Externas</strong></h4>
                            <ul class="lista">';
                                for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>
                            </div>
                                ';
                            }
                            ?>

                        </div>
                    </div>

                    <div class="col-12 p-0">
                        <div id="cinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">

                            <?php
                            if (count($r['caracteristicasAlrededores']) > 0) {
                                echo
                                    '<div class="col-md-12" style="margin-bottom: 12px;">
                            <h4 class="property-single-detail-title"><strong>Características de los alrededores</strong></h4>
                                <ul class="lista">';
                                for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>
                            </div>
                            ';
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <!----------INFORMACION BOTONES---------->


            </div>
            <!-- BOTONES CON CARACTERISTICAS DE INMUEBLE -->


        </div>

    </section>
    <!-- DESCRIPCIÓN DE INMUEBLE -->


    <!-- FORMULARIO Y MAPA -->
    <div id="formulario_asesor" class="container d-flex mt-5">

        <div class="col-6">
            <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2237422796466!2d-75.6037529855334!3d6.234210095487259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429969bf605a1%3A0xc2f64e3ad34d244d!2sCl.%2032%20%2380a-75%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1584032787734!5m2!1ses!2sco" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <div class="col-6">

            <h3 class="mb-2"> Contacto con el Asesor </h3>

            <div class="imagen_asesor d-flex align-ites-center m-auto justify-content-center">
                <img class="w-100 h-100" src="<?php echo $asesor['FotoAsesor']; ?>">
            </div>

            <div class="d-flex align-items-center text-break flex-xl-row mt-3 col-12">
                <i class="magenta fas fa-user mr-2"></i>
                <p> <?php echo $asesor['ntercero']; ?> </p>
            </div>

            <div class="d-flex align-items-center text-break flex-xl-row col-12">
                <i class="magenta fas fa-mobile-alt mr-2"></i>
                <a class="color_asesor" href="tel:+57<?php echo $asesor['celular']; ?>"><?php echo $asesor['celular']; ?></a>
            </div>

            <div class="d-flex align-items-center text-break flex-xl-row col-12">
                <i class="magenta fas fa-envelope mr-2"></i>
                <a class="color_asesor" href="mailto:<?php echo $asesor['correo']; ?>"><?php echo $asesor['correo']; ?></a>
            </div>

            <form class="col-12 mb-3">

                <input type="text" class="my-2 border codigo_input form-control" placeholder="Nombre y Apellido">
                <input type="email" class="my-2 border codigo_input form-control" placeholder="Correo Electrónico">
                <input type="number" class="my-2 border codigo_input form-control" placeholder="Teléfono / Celular">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mensaje" rows="3"></textarea>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1"> Confirmo que he leído, entendido y acepto la <a class="azul_oscuro" href="politica_de_datos.pdf" download="Politica de Datos">política de tratamiento de datos personales.</a> </label>
                </div>
                <div class="row justify-content-center">
                    <button class="col-3 btn boton2"> Enviar </button>
                </div>
            </form>
        </div>

    </div>
    <!-- FORMULARIO Y MAPA -->

    <!-- ÚLTIMAS NOTICIAS -->

    <h2 class="text-center font-weight-bold my-5"> Propiedades Similares </h2>

    <section id="inmuebles" class="container mt-5 d-flex flex-wrap align-items-stretch">


        <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>

    </section>
    <!-- ÚLTIMAS NOTICIAS -->








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

    <script src="js/slick.min.js"></script>

    <!-- Carrusel -->
    <script>
        $('#slide-detalle').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '#miniaturas'
        });
        $('#miniaturas').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#slide-detalle',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- Carrusel -->

    <script src="js/validacion_botones_detalle_inmueble.js"></script>


</body>

</html>