<?php require 'variables/variables.php';
$page = "Inmuebles" ?>
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

        <div class="imagen position-absolute w-100 h-100"></div>
        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="blanco w-100 h-100 d-flex align-items-center justify-content-center contenido position-relative">

            <h1 class="font-weight-bold"> INMUEBLES </h1>

        </div>

    </section>
    <!-- BANNER -->


    <!-- ÚLTIMAS NOTICIAS -->

    <h2 class="text-center font-weight-bold my-5"> Imuebles Disponibles </h2>

    <section id="inmuebles" class="container mt-5 d-flex flex-wrap align-items-stretch">


        <!-- CARD -->
        <div class="col-4 mb-5">
            <div class="card">

                <div class="imagen">
                    <img src="images/copy1.jpg" class="card-img-top" alt="...">
                </div>

                <div class="">

                    <div class="py-3 caja border-bottom d-flex justify-content-around align-items-baseline">


                        <!-- AREA -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="ml-3 mr-2 azul fas fa-chart-area"></i>
                            <p class="pr-3"> 5mts<sup>2</sup></p>
                        </div>
                        <!-- AREA -->

                        <!-- BAÑOS -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bath"></i>
                            <p class="pr-3"> 2 </p>
                        </div>
                        <!-- BAÑOS -->

                        <!-- HABITACIONES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bed"></i>
                            <p class="pr-3"> 1 </p>
                        </div>
                        <!-- HABITACIONES -->

                        <!-- GARAGES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mx-2   azul fas fa-warehouse"></i>
                            <p class="pr-3"> 1 </p>
                        </div>
                        <!-- GARAGES -->


                    </div>


                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->
                    <div class="caja py-3">
                        <h4 class="mb-2 px-3"> Dirección </h4>
                        <p class="px-3 text-muted"> Código: 2234 </p>
                        <p class="px-3 descripcion"> Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis.Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisscripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis.Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, qui. </p>
                    </div>
                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->


                    <!-- PRECIO -->
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="mr-2"> <span class="azul font-weight-bold">$</span> 100.000.000 </p>
                        <a href="#" class="my-2 btn boton2"> Ver Inmueble </a>
                    </div>
                    <!-- PRECIO -->



                </div>

            </div>
        </div>
        <!-- CARD -->

        <!-- CARD -->
        <div class="col-4 mb-5">
            <div class="card">

                <div class="imagen">
                    <img src="images/copy2.jpg" class="card-img-top" alt="...">
                </div>

                <div class="">

                    <div class="py-3 caja border-bottom d-flex justify-content-around align-items-baseline">


                        <!-- AREA -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="ml-3 mr-2 azul fas fa-chart-area"></i>
                            <p class="pr-3"> 5mts<sup>2</sup></p>
                        </div>
                        <!-- AREA -->

                        <!-- BAÑOS -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bath"></i>
                            <p class="pr-3"> 2 </p>
                        </div>
                        <!-- BAÑOS -->

                        <!-- HABITACIONES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bed"></i>
                            <p class="pr-3"> 1 </p>
                        </div>
                        <!-- HABITACIONES -->

                        <!-- GARAGES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mx-2   azul fas fa-warehouse"></i>
                            <p class="pr-3"> 1 </p>
                        </div>
                        <!-- GARAGES -->


                    </div>


                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->
                    <div class="caja py-3">
                        <h4 class="mb-2 px-3"> Dirección </h4>
                        <p class="px-3 text-muted"> Código: 2234 </p>
                        <p class="px-3 descripcion"> Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis.Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisscripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis.Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, qui. </p>
                    </div>
                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->


                    <!-- PRECIO -->
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="mr-2"> <span class="azul font-weight-bold">$</span> 100.000.000 </p>
                        <a href="" class="my-2 btn boton2"> Ver Inmueble </a>
                    </div>
                    <!-- PRECIO -->



                </div>

            </div>
        </div>
        <!-- CARD -->

        <!-- CARD -->
        <div class="col-4 mb-5">
            <div class="card">

                <div class="imagen">
                    <img src="images/copy3.jpg" class="card-img-top" alt="...">
                </div>

                <div class="">

                    <div class="py-3 caja border-bottom d-flex justify-content-around align-items-baseline">


                        <!-- AREA -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="ml-3 mr-2 azul fas fa-chart-area"></i>
                            <p class="pr-3"> 5mts<sup>2</sup></p>
                        </div>
                        <!-- AREA -->

                        <!-- BAÑOS -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bath"></i>
                            <p class="pr-3"> 2 </p>
                        </div>
                        <!-- BAÑOS -->

                        <!-- HABITACIONES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bed"></i>
                            <p class="pr-3"> 1 </p>
                        </div>
                        <!-- HABITACIONES -->

                        <!-- GARAGES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mx-2   azul fas fa-warehouse"></i>
                            <p class="pr-3"> 1 </p>
                        </div>
                        <!-- GARAGES -->


                    </div>


                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->
                    <div class="caja py-3">
                        <h4 class="mb-2 px-3"> Dirección </h4>
                        <p class="px-3 text-muted"> Código: 2234 </p>
                        <p class="px-3 descripcion"> Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis.Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisscripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis.Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, qui. </p>
                    </div>
                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->


                    <!-- PRECIO -->
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="mr-2"> <span class="azul font-weight-bold">$</span> 100.000.000 </p>
                        <a href="" class="my-2 btn boton2"> Ver Inmueble </a>
                    </div>
                    <!-- PRECIO -->



                </div>

            </div>
        </div>
        <!-- CARD -->

        <!-- CARD -->
        <div class="col-4 mb-5">
            <div class="card">

                <div class="imagen">
                    <img src="images/copy1.jpg" class="card-img-top" alt="...">
                </div>

                <div class="">

                    <div class="py-3 caja border-bottom d-flex justify-content-around align-items-baseline">


                        <!-- AREA -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="ml-3 mr-2 azul fas fa-chart-area"></i>
                            <p class="pr-3"> 5mts<sup>2</sup></p>
                        </div>
                        <!-- AREA -->

                        <!-- BAÑOS -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bath"></i>
                            <p class="pr-3"> 2 </p>
                        </div>
                        <!-- BAÑOS -->

                        <!-- HABITACIONES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bed"></i>
                            <p class="pr-3"> 1 </p>
                        </div>
                        <!-- HABITACIONES -->

                        <!-- GARAGES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mx-2   azul fas fa-warehouse"></i>
                            <p class="pr-3"> 1 </p>
                        </div>
                        <!-- GARAGES -->


                    </div>


                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->
                    <div class="caja py-3">
                        <h4 class="mb-2 px-3"> Dirección </h4>
                        <p class="px-3 text-muted"> Código: 2234 </p>
                        <p class="px-3 descripcion"> Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis.Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisscripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis.Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, qui. </p>
                    </div>
                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->


                    <!-- PRECIO -->
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="mr-2"> <span class="azul font-weight-bold">$</span> 100.000.000 </p>
                        <a href="#" class="my-2 btn boton2"> Ver Inmueble </a>
                    </div>
                    <!-- PRECIO -->



                </div>

            </div>
        </div>
        <!-- CARD -->

        <!-- CARD -->
        <div class="col-4 mb-5">
            <div class="card">

                <div class="imagen">
                    <img src="images/copy2.jpg" class="card-img-top" alt="...">
                </div>

                <div class="">

                    <div class="py-3 caja border-bottom d-flex justify-content-around align-items-baseline">


                        <!-- AREA -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="ml-3 mr-2 azul fas fa-chart-area"></i>
                            <p class="pr-3"> 5mts<sup>2</sup></p>
                        </div>
                        <!-- AREA -->

                        <!-- BAÑOS -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bath"></i>
                            <p class="pr-3"> 2 </p>
                        </div>
                        <!-- BAÑOS -->

                        <!-- HABITACIONES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bed"></i>
                            <p class="pr-3"> 1 </p>
                        </div>
                        <!-- HABITACIONES -->

                        <!-- GARAGES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mx-2   azul fas fa-warehouse"></i>
                            <p class="pr-3"> 1 </p>
                        </div>
                        <!-- GARAGES -->


                    </div>


                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->
                    <div class="caja py-3">
                        <h4 class="mb-2 px-3"> Dirección </h4>
                        <p class="px-3 text-muted"> Código: 2234 </p>
                        <p class="px-3 descripcion"> Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis.Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisscripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis.Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, qui. </p>
                    </div>
                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->


                    <!-- PRECIO -->
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="mr-2"> <span class="azul font-weight-bold">$</span> 100.000.000 </p>
                        <a href="" class="my-2 btn boton2"> Ver Inmueble </a>
                    </div>
                    <!-- PRECIO -->



                </div>

            </div>
        </div>
        <!-- CARD -->

        <!-- CARD -->
        <div class="col-4 mb-5">
            <div class="card">

                <div class="imagen">
                    <img src="images/copy3.jpg" class="card-img-top" alt="...">
                </div>

                <div class="">

                    <div class="py-3 caja border-bottom d-flex justify-content-around align-items-baseline">


                        <!-- AREA -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="ml-3 mr-2 azul fas fa-chart-area"></i>
                            <p class="pr-3"> 5mts<sup>2</sup></p>
                        </div>
                        <!-- AREA -->

                        <!-- BAÑOS -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bath"></i>
                            <p class="pr-3"> 2 </p>
                        </div>
                        <!-- BAÑOS -->

                        <!-- HABITACIONES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bed"></i>
                            <p class="pr-3"> 1 </p>
                        </div>
                        <!-- HABITACIONES -->

                        <!-- GARAGES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mx-2   azul fas fa-warehouse"></i>
                            <p class="pr-3"> 1 </p>
                        </div>
                        <!-- GARAGES -->


                    </div>


                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->
                    <div class="caja py-3">
                        <h4 class="mb-2 px-3"> Dirección </h4>
                        <p class="px-3 text-muted"> Código: 2234 </p>
                        <p class="px-3 descripcion"> Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis.Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quisscripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, quis.Descripción de la Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, qui. </p>
                    </div>
                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->


                    <!-- PRECIO -->
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="mr-2"> <span class="azul font-weight-bold">$</span> 100.000.000 </p>
                        <a href="" class="my-2 btn boton2"> Ver Inmueble </a>
                    </div>
                    <!-- PRECIO -->



                </div>

            </div>
        </div>
        <!-- CARD -->








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


</body>

</html>