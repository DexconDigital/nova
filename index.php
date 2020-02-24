<?php require 'variables/variables.php';
$page = "Inicio" ?>
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
    <section class="sticky-top bg-light">
        <!-- SECCION REDES -->
        <section id="redes" class="py-3">

            <div class="container d-flex align-items-center justify-content-end">

                <a href="<?php echo $redes_sociales['instagram']['link'] ?>" class="">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="<?php echo $redes_sociales['facebook']['link'] ?>" class="ml-3 mr-5">
                    <i class="fab fa-facebook-f"> </i>
                </a>

                <div class="mr-3 d-flex align-items-center">
                    <i class="magenta mr-2 <?php echo $datos_contacto['direccion']['icono'] ?>"></i>
                    <p><?php echo $datos_contacto['direccion']['direccion'] ?></p>
                </div>

                <a class="mr-3 d-flex align-items-center" target="_blank" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>">
                    <i class="magenta mr-2 <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"></i>
                    <p><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></p>
                </a>

                <a class="d-flex align-items-center" target="_blank" href="tel:<?php echo $datos_contacto['celular']['link'] ?>">
                    <i class="magenta mr-2 <?php echo $datos_contacto['celular']['icono'] ?>"></i>
                    <p><?php echo $datos_contacto['celular']['imprimir'] ?></p>
                </a>

            </div>

        </section>
        <!-- SECCION REDES -->

        <!-- MENU -->
        <header>

            <nav class="navbar navbar-expand-lg navbar-light bg-light container">

                <!-- LOGO -->
                <a href="index.php" class="imagen_logo">
                    <img class="w-100 h-100" src="images/logo.png" alt="">
                </a>
                <!-- LOGO -->


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- MENU -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ">

                        <li class="d-flex align-items-center nav-item active">
                            <a class="nav-link <?php if ($page == 'Inicio') {
                                                    echo 'activo';
                                                } ?>" href="index.php "> Inicio </a>
                        </li>

                        <li class="d-flex align-items-center nav-item">
                            <a class="nav-link <?php if ($page == 'Nosotros') {
                                                    echo 'activo';
                                                } ?>" href="nosotros.php"> Nosotros </a>
                        </li>

                        <li class="d-flex align-items-center nav-item">
                            <a class="nav-link <?php if ($page == 'Servicios') {
                                                    echo 'activo';
                                                } ?>" href="servicios.php"> Servicios </a>
                        </li>

                        <li class="d-flex align-items-center nav-item">
                            <a class="nav-link <?php if ($page == 'Inmuebles') {
                                                    echo 'activo';
                                                } ?>" href="inmuebles.php"> Inmuebles </a>
                        </li>

                        <li class="d-flex align-items-center nav-item">
                            <a class="nav-link <?php if ($page == 'Nova Interactiva') {
                                                    echo 'activo';
                                                } ?>" href="nova.php"> Nova Interactiva </a>
                        </li>

                        <li class="d-flex align-items-center nav-item">
                            <a class="nav-link <?php if ($page == 'Blog') {
                                                    echo 'activo';
                                                } ?>" href="blog.php"> Blog </a>
                        </li>

                        <li class="d-flex align-items-center nav-item">
                            <a class="nav-link <?php if ($page == 'Contáctanos') {
                                                    echo 'activo';
                                                } ?>" href="contactenos.php"> Contáctanos </a>
                        </li>


                        <!-- LOGO PSE -->
                        <a class="logopse nav-link" href="#">
                            <img class="w-100 h-100" src="images/logopse.png" alt="">
                        </a>
                        <!-- LOGO PSE -->



                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->

                    </ul>

                </div>
                <!-- MENU -->

            </nav>

        </header>
        <!-- MENU -->
    </section>
    <!-- HEADER -->


    <!-- CARRUSEL -->
    <section id="carrusel" class="position-relative">

        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol> -->
                <div class="carousel-inner position-relative">
                    <div class="carousel-item h-100 active">
                        <img src="images/slide_1.jpg" class="d-block h-100 w-100" alt="...">
                        <div class="carousel-caption h-100 d-none d-md-block">
                            <div class="d-flex align-items-center justify-content-center position-absolute w-100 h-100">
                                <h2> <span class="azul">La nueva cara del</span> <span class="magenta">buen servicio</span> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item h-100">
                        <img src="images/slide_2.jpg" class="d-block h-100 w-100" alt="...">
                        <div class="carousel-caption h-100 d-none d-md-block">
                            <div class="d-flex align-items-center justify-content-center position-absolute h-100 w-100">
                                <h2> <span class="azul">Un enfoque personalizado</span> <span class="magenta">de atención</span> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item h-100">
                        <img src="images/slide_3.jpg" class="d-block h-100 w-100" alt="...">
                        <div class="carousel-caption h-100 d-none d-md-block">
                            <div class="d-flex align-items-center justify-content-center position-absolute h-100 w-100">
                                <h2> <span class="azul">La mejor experiencia</span> <span class="magenta">a tu servicio</span> </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>



            </div>
        </div>
    </section>
    <!-- CARRUSEL -->

    <!-- BUSCADOR -->
    <section id="buscador" class="overflow-hidden">
        <div class="pt-3 pb-4 container position-relative rounded">

            <div class="col-12">
                <div class="row ">

                    <div class="col-3 form-group">
                        <input placeholder="Código" type="number" class="form-control" id="codigo_buscar" aria-describedby="emailHelp">
                    </div>

                    <div class="col-3 form-group">
                        <select class="form-control" id="tipo_inmueble_buscar">
                            <option selected default> Tipo de Inmueble </option>
                        </select>
                    </div>

                    <div class="col-3 form-group">
                        <select class="form-control" id="tipo_gestion_buscar">
                            <option selected default> Tipo de Gestión </option>
                        </select>
                    </div>

                    <div class="col-3 form-group">
                        <select class="form-control" id="ciudad_buscar">
                            <option selected default> Ciudad </option>
                        </select>
                    </div>

                    <div class="col-3 form-group">
                        <select class="form-control" id="barrio_buscar">
                            <option selected default> Barrio </option>
                        </select>
                    </div>

                    <div class="col-3 form-group">
                        <input placeholder="Baños" type="number" class="form-control" id="banios_buscar" aria-describedby="emailHelp">
                    </div>

                    <div class="col-3 form-group">
                        <input placeholder="Alcobas" type="number" class="form-control" id="alcobas_buscar" aria-describedby="emailHelp">
                    </div>

                    <div class="col-3 form-group">
                        <input placeholder="Garajes " type="number" class="form-control" id="garajes_buscar" aria-describedby="emailHelp">
                    </div>

                    <div class="col-3 form-group">
                        barrea de area
                    </div>

                    <div class="col-3 form-group">
                        barrea de area
                    </div>

                    <div class="col-6 d-flex align-items center justify-content-center">
                        <button type="button" id="buscar" class="col-3 btn boton"> Buscar </button>
                    </div>



                </div>
            </div>

        </div>
    </section>
    <!-- BUSCADOR -->

    <!-- BOTON PARA MOSTRAR BUSCADOR -->
    <div id="boton_minimizar_maximizar" class="d-flex align-items-center justify-content-center position-relative text-center">
        <i class="icono azul fas fa-times"></i>
    </div>
    <!-- BOTON PARA MOSTRAR BUSCADOR -->



    <!-- SERVICIOS -->
    <section id="servicios" class="container mt-5">

        <h2 class="text-center font-weight-bold mb-5">Servicios</h2>

        <div class="d-flex">

            <!-- CARD -->
            <div class="servicio col-4 d-flex align-items-center flex-column">

                <div class="d-flex align-items-center justify-content-center contenedor_icono">
                    <i class="icono <?php echo $iconos_servicios['arriendos'] ?>"> </i>
                </div>

                <div class="d-flex align-items-center justify-content-center flex-column contenedor_texto position-relative">
                    <h4 class="text-center mb-3"> <?php echo $texto_servicios['arriendos']['titulo'] ?> </h4>
                    <p class="text-justify px-3 pb-5"> Somos capaces de ofrecer el mejor asesoramiento para la venta de tu inmueble... </p>
                    <a class="d-block text-center btn boton1 blanco mb-5 p-2" href=""> Leer más </a>
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
                    <p class="text-justify px-3 pb-5"> Una completa oferta inmobiliaria, contamos con una mezcla entre diseño y funcionalidad... </p>
                    <a class="d-block btn boton1 text-center mb-5 p-2" href=""> Leer más </a>
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
                    <p class="text-justify px-3 pb-5"> Realizamos avalúos cumpliendo con toda la normatividad del país, asegurando... </p>
                    <a class="d-block btn boton1 text-center mb-5 p-2" href=""> Leer más </a>
                </div>

            </div>
            <!-- CARD -->

        </div>

    </section>
    <!-- SERVICIOS -->


    <!-- PROPIEDADES DESTACADAS -->
    <section id="propiedades_destacadas" class="position-relative py-5">

        <div class="position-absolute h-100 w-100 imagen">
        </div>

        <div class="position-absolute h-100 w-100 fondo_negro"></div>

        <h2 class="blanco text-center font-weight-bold my-5 "> Nuestras <span class="azul">propiedades</span> <span class="magenta">destacadas</span> </h2>

        <div class="blanco d-flex container align-items-center">

            <!-- DESCRIPCIÓN -->
            <div class="col-6 d-flex align-items-center justify-content-center flex-column">
                <h5 class="font-weight-bold"> Encuentra aquí lo que estás buscando </h5>
                <p class="mt-3"> Te presentamos nuestras propiedades destacadas en arriendo y en venta, si no
                    encuentras lo que estás buscando, te invitamos a conocer nuestra oferta total de inmuebles. </p>
                <a href="inmuebles.php" class="btn boton2 mt-3"> Todos los inmuebles </a>
            </div>
            <!-- DESCRIPCIÓN -->


            <!-- CARDS -->
            <div class="col-6">

                <div id="carrusel_destacadas" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <!-- CARD -->
                        <div class="carousel-item active">

                            <!-- IMAGEN INMUEBLE -->
                            <img src="images/slide_1.jpg" class="d-block w-100" alt="...">
                            <!-- IMAGEN INMUEBLE -->

                            <!-- DIRECCIÓN -->
                            <div class="position-absolute titulo d-flex flex-column align-items-baseline">
                                <div class="d-flex">
                                    <i class="azul mr-1 fas fa-map-marker-alt"></i>
                                    <p> Manizales - Caldas </p>
                                </div>
                                <p class="mt-1 codigo"> Código: 3546 </p>
                            </div>
                            <!-- DIRECCIÓN -->

                            <!-- ICONOS -->
                            <div class="position-absolute iconos d-flex align-items-baseline flex-wrap">

                                <div class="mr-2 d-flex align-items-center">
                                    <i class="mr-1 azul icono fas fa-chart-area"></i>
                                    <p> 200mts<sup>2 </p>
                                </div>

                                <div class="mr-2 d-flex align-items-center">
                                    <i class="mr-1 azul icono fas fa-bed"></i>
                                    <p> 5 </p>
                                </div>

                                <div class="mr-2 d-flex align-items-center">
                                    <i class="mr-1 azul icono fas fa-bath"></i>
                                    <p> 2 </p>
                                </div>

                                <div class="d-flex align-items-center">
                                    <i class="mr-1 azul icono fas fa-warehouse"></i>
                                    <p> 3 </p>
                                </div>

                                <a href="#" class="ml-2 btn boton2 precio"> $500.000.000 </a>
                                <!-- ICONOS -->


                            </div>
                        </div>
                        <!-- CARD -->

                        <!-- CARD -->
                        <div class="carousel-item">

                            <!-- IMAGEN INMUEBLE -->
                            <img src="images/slide_2.jpg" class="d-block w-100" alt="...">
                            <!-- IMAGEN INMUEBLE -->

                            <!-- DIRECCIÓN -->
                            <div class="position-absolute titulo d-flex flex-column align-items-baseline">
                                <div class="d-flex">
                                    <i class="azul mr-1 fas fa-map-marker-alt"></i>
                                    <p> Bogota - Bogota D.C </p>
                                </div>
                                <p class="mt-1 codigo"> Código: 4955 </p>

                            </div>
                            <!-- DIRECCIÓN -->

                            <!-- ICONOS -->
                            <div class="position-absolute iconos d-flex align-items-baseline flex-wrap">

                                <div class="mr-2 d-flex align-items-center">
                                    <i class="mr-1 azul icono fas fa-chart-area"></i>
                                    <p> 500mts<sup>2 </p>
                                </div>

                                <div class="mr-2 d-flex align-items-center">
                                    <i class="mr-1 azul icono fas fa-bed"></i>
                                    <p> 3 </p>
                                </div>

                                <div class="mr-2 d-flex align-items-center">
                                    <i class="mr-1 azul icono fas fa-bath"></i>
                                    <p> 1 </p>
                                </div>

                                <div class="d-flex align-items-center">
                                    <i class="mr-1 azul icono fas fa-warehouse"></i>
                                    <p> 1 </p>
                                </div>

                                <a href="#" class="ml-2 btn boton2 precio"> $100.000.000 </a>
                                <!-- ICONOS -->


                            </div>
                        </div>
                        <!-- CARD -->

                        <!-- CARD -->
                        <div class="carousel-item">

                            <!-- IMAGEN INMUEBLE -->
                            <img src="images/slide_3.jpg" class="d-block w-100" alt="...">
                            <!-- IMAGEN INMUEBLE -->

                            <!-- DIRECCIÓN -->
                            <div class="position-absolute titulo d-flex flex-column align-items-baseline">
                                <div class="d-flex">
                                    <i class="azul mr-1 fas fa-map-marker-alt"></i>
                                    <p> Medellín - Medellín </p>
                                </div>
                                <p class="mt-1 codigo"> Código: 1023 </p>
                            </div>
                            <!-- DIRECCIÓN -->

                            <!-- ICONOS -->
                            <div class="position-absolute iconos d-flex align-items-baseline flex-wrap">

                                <div class="mr-2 d-flex align-items-center">
                                    <i class="mr-1 azul icono fas fa-chart-area"></i>
                                    <p> 600mts<sup>2 </p>
                                </div>

                                <div class="mr-2 d-flex align-items-center">
                                    <i class="mr-1 azul icono fas fa-bed"></i>
                                    <p> 2 </p>
                                </div>

                                <div class="mr-2 d-flex align-items-center">
                                    <i class="mr-1 azul icono fas fa-bath"></i>
                                    <p> 1 </p>
                                </div>

                                <div class="d-flex align-items-center">
                                    <i class="mr-1 azul icono fas fa-warehouse"></i>
                                    <p> 0 </p>
                                </div>

                                <a href="#" class="ml-2 btn boton2 precio"> $1.500.000.000 </a>
                                <!-- ICONOS -->


                            </div>
                        </div>
                        <!-- CARD -->

                    </div>

                    <a class="btn boton2 izquierda_destacadas" href="#carrusel_destacadas" role="button" data-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </a>

                    <a class="btn boton2 derecha_destacadas" href="#carrusel_destacadas" role="button" data-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </a>

                </div>
            </div>
            <!-- CARDS -->

        </div>


    </section>
    <!-- PROPIEDADES DESTACADAS -->

    <!-- ASESORES -->
    <section id="asesores" class="pt-5">

        <h2 class="text-center font-weight-bold pt-5"> Conoce nuestros asesores </h2>

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


    <!-- NOVA TRANSACCIONAL -->
    <section id="nova_transaccional" class="position-relative mt-5 py-5">

        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="container position-relative d-flex flex-wrap text-break">

            <h2 class="col-12 text-center mb-5 blanco font-weight-bold"> Bienvenido a <span class="azul"> Nova </span> <span class="magenta">Transaccional</span> </h2>

            <!-- CARD -->
            <a target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=978&tipo=1" class="blanco col-4 d-flex flex-column align-items-center">

                <h4 class="font-weight-bold mb-2 blanco"> Propietarios </h2>

                    <div>
                        <img class="" src="images/slide_1.jpg" alt="">
                    </div>

                    <div class="blanco mt-2 btn boton1"> Ingresa </div>

            </a>
            <!-- CARD -->

            <!-- CARD -->
            <a target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=978&tipo=2" class="blanco col-4 d-flex flex-column align-items-center">

                <h4 class="font-weight-bold mb-2 blanco"> Arrendatarios </h2>

                    <div>
                        <img class="" src="images/slide_2.jpg" alt="">
                    </div>

                    <div class="blanco mt-2 btn boton1"> Ingresa </div>

            </a>
            <!-- CARD -->

            <!-- CARD -->
            <a target="_blank" href="#" class="blanco col-4 d-flex flex-column align-items-center">

                <h4 class="font-weight-bold mb-2 blanco"> Pagos PSE </h4>

                <div>
                    <img class="" src="images/slide_3.jpg" alt="">
                </div>

                <div class="blanco mt-2 btn boton1"> Ingresa </div>

            </a>
            <!-- CARD -->



        </div>

    </section>
    <!-- NOVA TRANSACCIONAL -->

    <!-- SLIDE DE IMAGENES -->
    <section id="slide_imagenes" class="container mt-5">

        <h2 class="font-weight-bold text-center py-5"> Un inmueble para cada necesidad </h2>

        <div id="slide_de_imagenes" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slide_de_imagenes" data-slide-to="0" class="active"></li>
                <li data-target="#slide_de_imagenes" data-slide-to="1"></li>
                <li data-target="#slide_de_imagenes" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slide_1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide_2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slide_3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#slide_de_imagenes" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slide_de_imagenes" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

















    <!-- ARCHIVOS FOOTER -->
    <section>
        <?php include 'layout/archivos_footer.php' ?>
    </section>
    <!-- ARCHIVOS FOOTER -->



    <script src="js/buscador.js">
    </script>




</body>

</html>