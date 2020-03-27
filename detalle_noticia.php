<?php require 'variables/variables.php';
require 'controllers/detalle_noticiasController.php';
$page = "Detalle de Blog" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivos_header.php' ?>

    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>
<style>
    #cont_img_noticia {
        float: left;
        object-fit: cover;
        box-shadow: 2px 2px 6px 3px grey;
        width: 35%;
    }

    .sec-title.centered {
        text-align: center;
        margin-bottom: 5%;
    }
</style>

<body>

    <!-- HEADER -->
    <?php include 'layout/header.php' ?>
    <!-- HEADER -->

    <!-- BANNER -->
    <section id="banner" class="position-relative">

        <div class="imagen_blog position-absolute w-100 h-100"></div>
        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="blanco w-100 h-100 d-flex align-items-center justify-content-center contenido position-relative">

            <h1 class="text-center font-weight-bold"> Detalle de Noticia </h1>

        </div>

    </section>
    <!-- BANNER -->


    <section class="container mt-5">

        <!-- TITULO DE NOTICIA -->
        <h2 class="text-center" style="vertical-align: inherit;"><?php echo $nombre ?></h2>
        <!-- TITULO DE NOTICIA -->


        <div  class="col-12 d-flex flex-wrap mt-5">

            <!-- IMAGEN -->
            <div style="height:400px" class="parrafo_noticia d-flex align-items-center justify-content-center col-12 col-md-6 col-lg-6 col-xl-6">
                <img style="object-fit:contain" id="cont_img_noticia" class="w-100" src="<?php echo $ruta_imagen ?>" alt="">
            </div>
            <!-- IMAGEN -->


            <!-- DESCRIPCIÓN -->
            <div style="height:400px; overflow:scroll" class="d-flex align-items-center justify-content-center mt-3 mt-md-0 mt-lg-0 mt-xl-0 text-break col-12 col-md-6 col-lg-6 col-xl-6">
                <p  class="text-justify"> <?php echo $noticia ?> </p>
            </div>
            <!-- DESCRIPCIÓN -->

        </div>

    

        <div class="col-12 mt-3">
            <p class="text-center mt-3 text-muted"> Publicado el: <?php echo $fecha_complete; ?></p>
        </div>

        <div class="col-12 mt-3">
            <?php if ($ruta_archivo != $comparador . "") {
                echo '<a style="color:black;" href="' . $ruta_archivo . '" download="Noticias.pdf"><i style="color:red;" class="fas fa-file-pdf mr-3"></i>Descargar Archivo Adjunto</a>';
            } ?>

        </div>


    </section>






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