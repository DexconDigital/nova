<?php require 'variables/variables.php';
require_once 'variables/captcha.php';
$WebK = Web_Key;
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
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <style>
        #map {
            height: 500px;
            z-index: 20;
        }

        .leaflet-control {
            z-index: 200;
        }

        .leaflet-control {
            z-index: 20;
        }
    </style>

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

        <div class="imagen_detalle_inmueble position-absolute w-100 h-100"></div>
        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="blanco w-100 h-100 d-flex align-items-center justify-content-center contenido position-relative">

            <h1 class="text-center font-weight-bold"> Detalle de Inmueble </h1>

        </div>

    </section>
    <!-- BANNER -->

    <h2 class="text-center font-weight-bold mt-5"> Conoce en Detalle el Inmueble </h2>



    <!-- PRECIO Y CARACTERISTICAS PRINCIPALES INMUEBLE (RESPONSIVE)-->
    <div id="caracteristicas_principales" class="container align-items-stretch d-flex flex-wrap mt-5 mb-n3">

        <div class="order-md-1 col-6 precio py-3 justify-content-center">
            <p class="text-center blanco font-weight-bold"> <?php if ($r['Gestion'] == 'Arriendo') {
                                                                echo '<span class="precio">$ ' . $r['ValorCanon'] . '</span>';
                                                            } else if ($r['Gestion'] == 'Venta') {
                                                                echo '<span class="precio">$ ' . $r['ValorVenta'] . '</span>';
                                                            } else {
                                                                echo '<span class="precio">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</span>';
                                                            }
                                                            ?> </p>
        </div>

        <div class="order-md-2 col-6 border-top border-right d-flex align-items-center justify-content-center">
            <p class="text-muted px-2"> Código: <?php echo $co; ?> </p>
        </div>

        <div class="order-md-3 col-6 col-md-3 py-3 border-left px-2 border-top d-flex align-items-center justify-content-center">
            <i class="azul mr-2 fas fa-chart-area"></i>
            <p> <?php echo $area_construida; ?> m<sup>2</sup> </p>
        </div>

        <div class="order-md-4 col-3 col-md-2 border-left border-right px-2 border-top d-flex align-items-center justify-content-center">
            <i class="azul mr-2 fas fa-bed"></i>
            <p> <?php echo $alcobas; ?> </p>
        </div>

        <div class="order-md-5 col-3 col-md-2 py-3 border-right px-2 border-top d-flex align-items-center justify-content-center">
            <i class="azul mr-2 fas fa-bath"></i>
            <p> <?php echo $banios; ?> </p>
        </div>

        <div class="order-md-6 col-3 col-md-2 py-3 border-left px-2 border-top d-flex align-items-center justify-content-center">
            <i class="azul mr-2 fas fa-warehouse"></i>
            <p> <?php echo $garaje; ?> </p>
        </div>

        <div class="order-md-9 col-3 py-3 border-right col-md-6 border-left px-2 border-top d-flex align-items-center justify-content-center">
            <i class="azul mr-2 fas fa-user-tie"></i>
            <p class="d-flex"> <?php if ($administracion != "") {
                                    echo '<span class="d-none d-md-block">Administración: </span>$' . $administracion . '</li>';
                                } ?>
            </p>
        </div>

        <div class="order-md-8 col-3 col-md-6 border-left px-2 border-top d-flex align-items-center justify-content-center">
            <i class="azul mr-2 far fa-clock"></i>
            <p class="d-flex"> <?php echo $edad_inmueble; ?> <span class="d-none d-md-block d-lg-block d-xl-block">&nbspAños </span> </p>
        </div>

        <div class="col-3 order-md-7 border-left px-2 border-right border-top d-flex align-items-center justify-content-center">
            <i class="azul mr-2 fas fa-chart-line"></i>
            <p> <?php echo $estrato; ?> </p>
        </div>



    </div>
    <!-- PRECIO Y CARACTERISTICAS PRINCIPALES INMUEBLE (RESPONSIVE)-->


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

            <div class="mb-3 d-flex flex-wrap flex-md-row flex-lg-row flex-xl-row justify-content-end align-items-center">


                <div class="p-0 col-12 order-2 order-md-1 order-lg-1 order-xl-1 col-md-auto col-lg-auto mr-md-3 mr-lg-3 mr-xl-3 col-xl-auto">
                    <a target="_blank" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=978-<?php echo $co ?>" class="btn boton1"> Descargar ficha </a>
                </div>

                <div class="p-0 col-12 order-1  mb-3 mb-md-0 mb-xl-0 mb-lg-0 order-md-2 order-lg-2 order-xl-2 col-md-auto col-lg-auto col-xl-auto d-flex align-items-center">

                    <p> Comparte en: </p>

                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.inmobiliarianova.com.co%2Fdetalle_inmueble.php%3Fco%3D986-<?php echo $co; ?>"><i class="ml-2 fab fa-facebook-f"> </i></a>
                    <a target="_blank" href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20http://www.inmobiliarianova.com.co/detalleInmueble.php?codigo%3d' . $co ?>"><i class="ml-2 fab fa-whatsapp"> </i></a>
                    <a target="_blank" href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.inmobiliarianova.com.co%2Fdetalle_inmueble.php%3Fco%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>"><i class="ml-2 fab fa-twitter"> </i></a>

                </div>

            </div>

            <!-- TIPO DE INMUEBLE / TIPO DE GESTIÓN -->
            <h4> <?php echo $r['Tipo_Inmueble'] ?> en <?php echo $r['Gestion']; ?> </h4>
            <!-- TIPO DE INMUEBLE / TIPO DE GESTIÓN -->


            <!-- DIRECCIÓN -->
            <div class="mt-2 d-flex justify-content-between">

                <div class="d-flex align-items-baseline">
                    <i class="mr-2 fas fa-map-marker-alt"></i>
                    <p class="pb-2"> <?php echo $r['barrio'] . ', ' . $r['ciudad'] ?> </p>
                </div>

            </div>
            <!-- DIRECCIÓN -->


            <!-- BOTONES CON CARACTERISTICAS DE INMUEBLE (MOBIL)-->
            <div id="accordion" class="d-block d-md-none d-lg-none d-xl-none">
                <div class="container p-0">
                    <div class="col-12">

                        <!-- --------BOTONES-------- -->

                        <div class="row">

                            <div class="col-12 p-0 mb-1">
                                <button class="btn b1 boton1 activo2 col-12 collapsed" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="false" aria-controls="collapseExample">
                                    Descripción
                                </button>
                            </div>

                            <div class="col-12 p-0 mb-1">
                                <button class="btn b2 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="true" aria-controls="dos">
                                    Características
                                </button>
                            </div>

                            <div class="col-12 p-0 mb-1">
                                <button class="btn b3 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#tres" aria-expanded="true" aria-controls="dos">
                                    Características Internas
                                </button>
                            </div>

                            <div class="col-12 p-0 mb-1">
                                <button class="btn b4 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#cuatro" aria-expanded="true" aria-controls="dos">
                                    Características Externas
                                </button>
                            </div>

                            <div class="col-12 p-0 mb-1">
                                <button class="btn b5 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#cinco" aria-expanded="true" aria-controls="dos">
                                    Características Alrededores
                                </button>
                            </div>

                            <div class="col-12 p-0 mb-1">
                                <button class="btn b6 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#seis" aria-expanded="true" aria-controls="dos">
                                    Vídeo
                                </button>
                            </div>

                        </div>

                        <!-- --------BOTONES-------- -->

                        <!-- --------INFORMACION BOTONES-------- -->


                        <div class="col-12 p-0">

                            <div class="">
                                <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">

                                    <h4 class="text-center font-weight-bold my-3"> Descripción </h4>
                                    <p class="text-justify"> <?php echo $descripcion ?> </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 p-0">
                            <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                                <h4 class="text-center property-single-detail-title my-3"> <strong>Características</strong></h4>
                                <ul class="d-flex flex-column align-items-start p-0">
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
                            <div id="tres" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                                <?php
                                if (count($r['caracteristicasInternas']) > 0) {
                                    echo
                                        '<div class="text-center my-3 col-md-12" style="margin-bottom: 12px;">
                            <h4 class="property-single-detail-title"><strong>Características Internas</strong></h4>
                                <ul class="my-3 d-flex flex-column align-items-start p-0">';
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
                            <div id="cuatro" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                                <?php
                                if (count($r['caracteristicasExternas']) > 0) {
                                    echo
                                        '<div class="text-center my-3 col-md-12" style="margin-bottom: 12px;">
                            <h4 class="property-single-detail-title"><strong>Características Externas</strong></h4>
                            <ul class="my-3 d-flex flex-column align-items-start p-0">';
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
                            <div id="cinco" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                                <?php
                                if (count($r['caracteristicasAlrededores']) > 0) {
                                    echo
                                        '<div class="text-center mt-3 col-md-12" style="margin-bottom: 12px;">
                            <h4 class="my-3 property-single-detail-title"><strong>Características de los alrededores</strong></h4>
                                <ul class="d-flex flex-column align-items-start p-0">';
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

                        <div class="col-12 p-0">
                            <div id="seis" class="collapse" aria-labelledby="dos" data-parent="#accordion">

                                <?php if ($r['video'] != "") {
                                    echo
                                        ' <h5 class="font-weight-bold mt-3 d-inline-block linea position-relative"> Video </h5>
                                    <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Video</h5>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                        <iframe class="w-100" height="409" src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ';
                                } ?>

                            </div>
                        </div>



                    </div>

                    <!-- --------INFORMACION BOTONES-------- -->

                </div>


            </div>
            <!-- BOTONES CON CARACTERISTICAS DE INMUEBLE(MOBIL) -->

            <!-- BOTONES CON CARACTERISTICAS DE INMUEBLE -->
            <div id="accordion" class="d-none d-md-flex d-lg-flex d-xl-flex">


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

                            <div class="col-12 p-0 mb-1">
                                <button class="d-flex btn b6 boton1 col-12 collapsed" type="button" data-toggle="collapse" data-target="#seis" aria-expanded="true" aria-controls="dos">
                                    Video
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

                    <div class="col-12 p-0">
                        <div id="seis" class="collapse" aria-labelledby="seis" data-parent="#accordion">

                            <?php if ($r['video'] != "") {
                                echo
                                    ' <h5 class="font-weight-bold mt-3 d-inline-block linea position-relative"> Video </h5>
                                    <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Video</h5>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                        <iframe class="w-100" height="409" src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ';
                            } ?>

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
    <div id="formulario_asesor" class="container d-flex flex-wrap mt-5">


        <!-- MAPA -->
        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-5 mb-lg-0 mb-xl-0">
            <h4 class="mb-2 property-single-detail-title"><strong>Mapa de Ubicación</strong></h4>
            <div class="card mapa_tamaño">
                <div class="">
                    <div id="map" class="w-100"></div>
                </div>
            </div>
        </div>
        <!-- MAPA -->


        <div class="col-12 col-md-6 col-lg-6 col-xl-6">

            <h3 class="mb-2"> Contácto con el Asesor </h3>

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

            <form class="col-12 mb-3" action="email/correoasesor.php" method="POST" autocomplete="off">

                <input type="text" class="my-2 border codigo_input form-control" name="nombre" placeholder="Nombre y Apellido" required>
                <input type="email" class="my-2 border codigo_input form-control" name="correo" placeholder="Correo Electrónico">
                <input type="number" class="my-2 border codigo_input form-control" name="telefono" placeholder="Teléfono / Celular" required>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" placeholder="Mensaje" rows="3"></textarea>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1"> Confirmo que he leído, entendido y acepto la <a class="azul_oscuro" href="politica_de_datos.pdf" download="Politica de Datos">política de tratamiento de datos personales.</a> </label>
                </div>
                <div class="g-recaptcha col-12" data-sitekey="<?php echo $WebK ?>" required></div>
                <div class="col-12 mb-4"><small id="tituloHepl" class="form-text text-muted">Este campo es obligatorio</small></div>
                <select name="correo_asesor" style="display:none">
                    <option value="<?php echo $asesor['correo']; ?>"></option>
                </select>
                <select name="nom_asesor" style="display:none">
                    <option value=" <?php echo $asesor['ntercero']; ?>"> <?php echo $asesor['ntercero']; ?></option>
                </select>
                <select name="codigo" style="display:none">
                    <option value=" <?php echo $co ?>"> <?php echo $co ?></option>
                </select>
                <div class="row justify-content-center">
                    <button class="col-3 btn boton2" type="submit"> Enviar </button>
                </div>
            </form>
        </div>

    </div>
    <!-- FORMULARIO Y MAPA -->

    <!-- ÚLTIMAS NOTICIAS -->

    <h2 class="text-center font-weight-bold my-5"> Propiedades Similares </h2>

    <section id="inmuebles" class="container mt-5 d-flex flex-wrap justify-content-center align-items-stretch">


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

    <!-- mapa del inmueble -->
    <script src="mapas/leaflet.js" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);

        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
        }).addTo(map);

        L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
            .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
            .openPopup();
    </script>
    <!-- mapa del inmueble -->
    
    <!-- composer require google/recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>

</body>

</html>