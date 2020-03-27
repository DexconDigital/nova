<?php require 'variables/variables.php';
require 'controllers/noticiasController.php';
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
    <section id="ultimas_noticias" class="container mt-5 d-none d-md-flex d-lg-flex d-xl-flex flex-wrap">

        <?php if (isset($noticias_array)) {
            modelo_noticia($noticias_array);
        } else {
            echo '<div class="col 12">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
        }
        ?>
    </section>
    
    <!-- ÚLTIMAS NOTICIAS -->

    <!-- ÚLTIMAS NOTICIAS (MOVIL) -->
    <section id="ultimas_noticias" class="d-block d-md-none d-lg-none d-xl-none container mt-5 d-flex flex-wrap">


    <?php if (isset($noticias_array)) {
            modelo_noticia2($noticias_array);
        } else {
            echo '<div class="col 12">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
        }
        ?>





    </section>
    <!-- ÚLTIMAS NOTICIAS (MOVIL)-->








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