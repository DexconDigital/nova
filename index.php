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
    <?php include 'layout/header.php' ?>
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
                        <img style="object-fit:fill" src="images/imagen_18.jpg" class="d-block h-100 w-100" alt="...">
                        <div class="carousel-caption h-100 d-none d-md-block">
                            <div class="d-flex align-items-center justify-content-center position-absolute w-100 h-100">
                                <h2> <span class="azul">La nueva cara del</span> <span class="magenta">buen servicio</span> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item h-100">
                        <img src="images/imagen_2.jpg" class="d-block h-100 w-100" alt="...">
                        <div class="carousel-caption h-100 d-none d-md-block">
                            <div class="d-flex align-items-center justify-content-center position-absolute h-100 w-100">
                                <h2> <span class="azul">Un enfoque personalizado</span> <span class="magenta">de atención</span> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item h-100">
                        <img style="object-fit:fill" src="images/imagen_21.jpg" class="d-block h-100 w-100" alt="...">
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
    <section class="position-relative">
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
                            <p> Precio: </p>
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                        </div>

                        <div class="col-3 form-group">
                            <p> Área: </p>
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                        </div>

                        <div class="col-6 h-100 m-auto d-flex align-items center justify-content-center">
                            <button type="button" id="buscar" class="col-6 btn boton_footer"> Buscar </button>
                        </div>




                    </div>
                </div>

            </div>
        </section>
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

        <h2 class="blanco text-center font-weight-bold my-5 "> Nuestras <span class="azul"> Propiedades</span> <span class="magenta"> Destacadas </span> </h2>

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
                                <p> <span class="azul">Apartamento</span> en <span class="magenta">Arriendo</span> </p>
                                <div class="d-flex align-items-baseline">
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
                                <p> <span class="azul">Apartamento</span> en <span class="magenta">Arriendo</span> </p>
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

                                <p> <span class="azul">Apartamento</span> en <span class="magenta"> Venta </span> </p>

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


    <!-- NOVA TRANSACCIONAL -->
    <section id="nova_transaccional" class="position-relative mt-5 py-5">

        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="container position-relative d-flex flex-wrap text-break">

            <h2 class="col-12 text-center mb-5 blanco font-weight-bold"> Bienvenido a <span class="azul"> Nova </span> <span class="magenta">Transaccional</span> </h2>

            <!-- CARD -->
            <a target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=978&tipo=1" class="justify-content-between blanco col-4 d-flex flex-column align-items-center">

                <h4 class="font-weight-bold mb-2 blanco"> Propietarios </h2>

                    <div>
                        <img class="" src="images/imagen_13.jpg" alt="">
                    </div>

                    <div class="blanco mt-2 btn boton1"> Ingresa </div>

            </a>
            <!-- CARD -->

            <!-- CARD -->
            <a target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=978&tipo=2" class="justify-content-between blanco col-4 d-flex flex-column align-items-center">

                <h4 class="font-weight-bold mb-2 blanco"> Arrendatarios </h2>

                    <div>
                        <img class="" src="images/imagen_14.jpg" alt="">
                    </div>

                    <div class="blanco mt-2 btn boton1"> Ingresa </div>

            </a>
            <!-- CARD -->

            <!-- CARD -->
            <a target="_blank" href="#" class="justify-content-between blanco col-4 d-flex flex-column align-items-center">

                <h4 class="font-weight-bold mb-2 blanco"> Pagos PSE </h4>

                <div>
                    <img class="" src="images/imagen_7.jpg" alt="">
                </div>

                <div class="blanco mt-2 btn boton1"> Ingresa </div>

            </a>
            <!-- CARD -->



        </div>

    </section>
    <!-- NOVA TRANSACCIONAL -->

    <!-- SLIDE DE IMAGENES -->
    <section id="slide_imagenes" class="container mt-5">

        <h2 class="font-weight-bold text-center py-5"> Un Inmueble Para Cada Necesidad </h2>

        <div id="slide_de_imagenes" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#slide_de_imagenes" data-slide-to="0" class="active"></li>
                <li data-target="#slide_de_imagenes" data-slide-to="1"></li>
                <li data-target="#slide_de_imagenes" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item h-100 active">
                    <img src="images/imagen_1.jpg" class="h-100 d-block w-100" alt="...">
                </div>

                <div class="carousel-item h-100">
                    <img src="images/imagen_5.jpg" class="h-100 d-block w-100" alt="...">
                </div>


                <div class="carousel-item h-100">
                    <img src="images/imagen_8.jpg" class="h-100 d-block w-100" alt="...">
                </div>

                <div class="carousel-item h-100">
                    <img src="images/imagen_9.jpg" class="h-100 d-block w-100" alt="...">
                </div>

                <div class="carousel-item h-100">
                    <img src="images/imagen_15.jpg" class="h-100 d-block w-100" alt="...">
                </div>

                <div class="carousel-item h-100">
                    <img src="images/imagen_16.jpg" class="h-100 d-block w-100" alt="...">
                </div>

            </div>

            <a class="btn boton2 izquierda_imagenes" href="#slide_de_imagenes" role="button" data-slide="prev">
                <i class="fas fa-chevron-left"></i>
            </a>

            <a class="btn boton2 derecha_imagenes" href="#slide_de_imagenes" role="button" data-slide="next">
                <i class="fas fa-chevron-right"></i>
            </a>

        </div>

    </section>
    <!-- SLIDE DE IMAGENES -->

    <!-- BANNER DE ESTADISTICAS -->
    <section id="banner_estadisticas" class="position-relative py-5 mt-5">

        <!-- IMAGEN DE FONDO -->
        <div class="position-absolute w-100 h-100 imagen"> </div>
        <!-- IMAGEN DE FONDO -->

        <!-- OPACIDAD DE LA IMAGEN -->
        <div class="position-absolute w-100 h-100 fondo_negro"></div>
        <!-- OPACIDAD DE LA IMAGEN -->

        <!-- ICONOS -->
        <div class="contenido container position-relative d-flex align-items-center justify-content-around w-100 h-100 blanco">


            <!-- ICONO 1 -->
            <div id="animacion1" class="contenido_cards d-flex flex-column align-items-center justify-content-center">

                <div class="mb-2 d-flex align-items-center justify-content-center caja_icono">
                    <i class="icono magenta fas fa-warehouse"></i>
                </div>

                <p class="mb-2"> Total de Inmuebles </p>
                <p> 65 </p>

            </div>
            <!-- ICONO 1 -->


            <!-- ICONO 2 -->
            <div id="animacion2" class="contenido_cards d-flex flex-column align-items-center justify-content-center">

                <div class="mb-2 d-flex align-items-center justify-content-center caja_icono">
                    <i class="icono magenta fas fa-bath"></i>
                </div>

                <p class="mb-2"> Total en Arriendo </p>
                <p> 65 </p>

            </div>
            <!-- ICONO 2 -->


            <!-- ICONO 3 -->
            <div id="animacion3" class="contenido_cards d-flex flex-column align-items-center justify-content-center">

                <div class="mb-2 d-flex align-items-center justify-content-center caja_icono">
                    <i class="icono magenta fas fa-bed"></i>
                </div>

                <p class="mb-2"> Total en Venta </p>
                <p> 65 </p>

            </div>
            <!-- ICONO 3 -->


            <!-- ICONO 4 -->
            <div id="animacion4" class="contenido_cards d-flex flex-column align-items-center justify-content-center">

                <div class="mb-2 d-flex align-items-center justify-content-center caja_icono">
                    <i class="icono magenta fas fa-warehouse"></i>
                </div>

                <p class="mb-2"> Total en Arriendo/Venta </p>
                <p> 65 </p>

            </div>
            <!-- ICONO 4 -->


        </div>
        <!-- ICONOS -->


    </section>
    <!-- BANNER DE ESTADISTICAS -->

    <!-- ÚLTIMAS NOTICIAS -->
    <h2 class="font-weight-bold text-center my-5 "> Últimas Noticias </h2>
    <section id="ultimas_noticias" class="container mt-5 d-flex flex-wrap">


        <!-- CARD -->
        <div class="col-4">
            <div class="card">

                <div class="imagen">
                    <img src="images/copy1.jpg" class="card-img-top" alt="...">
                </div>

                <div class="">

                    <div class="py-3 caja border-bottom d-flex align-items-baseline">
                        <i class="mx-3 azul fas fa-calendar-alt"></i>
                        <p class="pr-3 text-muted"> 02/02/2020 </p>
                    </div>

                    <div class="caja py-3 border-bottom">
                        <h4 class="mb-2 px-3 font-weight-bold"> Titulo de Noticia </h4>
                        <p class="descripcion px-3"> Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis. </p>
                    </div>

                    <div class="d-flex align-items-center justify-content-center"> <a href="" class="my-2 btn boton2"> Leer más </a></div>


                </div>

            </div>
        </div>
        <!-- CARD -->

        <!-- CARD -->
        <div class="col-4">
            <div class="card">

                <div class="imagen">
                    <img src="images/copy2.jpg" class="card-img-top" alt="...">
                </div>

                <div class="">

                    <div class="py-3 caja border-bottom d-flex align-items-baseline">
                        <i class="mx-3 azul fas fa-calendar-alt"></i>
                        <p class="pr-3 text-muted"> 02/02/2020 </p>
                    </div>

                    <div class="caja py-3 border-bottom">
                        <h4 class="mb-2 px-3 font-weight-bold"> Titulo de Noticia </h4>
                        <p class="descripcion px-3"> Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis. </p>
                    </div>

                    <div class="d-flex align-items-center justify-content-center"> <a href="" class="my-2 btn boton2"> Leer más </a></div>


                </div>

            </div>
        </div>
        <!-- CARD -->


        <!-- CARD -->
        <div class="col-4">
            <div class="card">

                <div class="imagen">
                    <img src="images/copy3.jpg" class="card-img-top" alt="...">
                </div>

                <div class="">

                    <div class="py-3 caja border-bottom d-flex align-items-baseline">
                        <i class="mx-3 azul fas fa-calendar-alt"></i>
                        <p class="pr-3 text-muted"> 02/02/2020 </p>
                    </div>

                    <div class="caja py-3 border-bottom">
                        <h4 class="mb-2 px-3 font-weight-bold"> Titulo de Noticia </h4>
                        <p class="descripcion px-3"> Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis. </p>
                    </div>

                    <div class="d-flex align-items-center justify-content-center"> <a href="" class="my-2 btn boton2"> Leer más </a></div>


                </div>

            </div>
        </div>
        <!-- CARD -->





    </section>
    <!-- ÚLTIMAS NOTICIAS -->


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

    <script src="js/banner_estadisticas.js"></script>

    <script src="js/buscador.js"></script>




</body>

</html>