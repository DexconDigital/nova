<?php require 'variables/variables.php';
$page = "Blog" ?>
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

        <div class="imagen_blog position-absolute w-100 h-100"></div>
        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="blanco w-100 h-100 d-flex align-items-center justify-content-center contenido position-relative">

            <h1 class="font-weight-bold"> Blog </h1>

        </div>

    </section>
    <!-- BANNER -->

    <!-- ÚLTIMAS NOTICIAS -->
    <section id="ultimas_noticias" class="container mt-5 d-flex flex-wrap">

        <!-- CARD -->
        <div class="col-12 mb-5 ">
            <div class="d-flex flex-row align-items-center">

                <div class="col-5 imagen">
                    <img src="images/copy1.jpg" class="card-img-top" alt="...">
                </div>

                <div class="col-7 d-flex flex-column justify-content-between">

                    <div class="py-3 caja border-bottom d-flex align-items-baseline">
                        <i class="mx-3 azul fas fa-calendar-alt"></i>
                        <p class="pr-3 text-muted"> 02/02/2020 </p>
                    </div>

                    <div class="caja py-3 border-bottom">
                        <h4 class="mb-2 px-3 font-weight-bold"> Titulo de Noticia </h4>
                        <p class="descripcion px-3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur non, iure sed recusandae distinctio aliquam ipsum? Aspernatur quis, officiis dignissimos obcaecati eveniet modi maxime reprehenderit excepturi a beatae nesciunt eius error. derit excepturi a beatae nesciunt eius error. </p>
                    </div>

                    <div class="d-flex align-items-center justify-content-center"> <a href="" class="my-2 btn boton2"> Leer más </a></div>


                </div>

            </div>
        </div>
        <!-- CARD -->

        <!-- CARD -->
        <div class="col-12 mb-5 ">
            <div class="d-flex flex-row align-items-center">

                <div class="col-5 imagen">
                    <img src="images/copy2.jpg" class="card-img-top" alt="...">
                </div>

                <div class="col-7 d-flex flex-column justify-content-between">

                    <div class="py-3 caja border-bottom d-flex align-items-baseline">
                        <i class="mx-3 azul fas fa-calendar-alt"></i>
                        <p class="pr-3 text-muted"> 02/02/2020 </p>
                    </div>

                    <div class="caja py-3 border-bottom">
                        <h4 class="mb-2 px-3 font-weight-bold"> Titulo de Noticia </h4>
                        <p class="descripcion px-3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur non, iure sed recusandae distinctio aliquam ipsum? Aspernatur quis, officiis dignissimos obcaecati eveniet modi maxime reprehenderit excepturi a beatae nesciunt eius error. derit excepturi a beatae nesciunt eius error. </p>
                    </div>

                    <div class="d-flex align-items-center justify-content-center"> <a href="" class="my-2 btn boton2"> Leer más </a></div>


                </div>

            </div>
        </div>
        <!-- CARD -->

        <!-- CARD -->
        <div class="col-12 mb-5 ">
            <div class="d-flex flex-row align-items-center">

                <div class="col-5 imagen">
                    <img src="images/copy3.jpg" class="card-img-top" alt="...">
                </div>

                <div class="col-7 d-flex flex-column justify-content-between">

                    <div class="py-3 caja border-bottom d-flex align-items-baseline">
                        <i class="mx-3 azul fas fa-calendar-alt"></i>
                        <p class="pr-3 text-muted"> 02/02/2020 </p>
                    </div>

                    <div class="caja py-3 border-bottom">
                        <h4 class="mb-2 px-3 font-weight-bold"> Titulo de Noticia </h4>
                        <p class="descripcion px-3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur non, iure sed recusandae distinctio aliquam ipsum? Aspernatur quis, officiis dignissimos obcaecati eveniet modi maxime reprehenderit excepturi a beatae nesciunt eius error. derit excepturi a beatae nesciunt eius error. </p>
                    </div>

                    <div class="d-flex align-items-center justify-content-center"> <a href="" class="my-2 btn boton2"> Leer más </a></div>


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