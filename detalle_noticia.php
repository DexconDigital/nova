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
    #cont_img_noticia{
    float: left;
    object-fit: cover;
    box-shadow: 2px 2px 6px 3px grey;
    width: 35%;
    }
    .sec-title.centered{
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

            <h1 class="font-weight-bold"> Detalle de Blog </h1>

        </div>

    </section>
    <!-- BANNER -->


    <!-- Fin cabezera -->
    <section class="mt-5 mb-5">
        <div class="col-12">
            <div class="sec-title centered">
                <h2>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"><?php echo $nombre ?></font>
                    </font>
                </h2>
                <div class="separator"></div>
            </div>
        </div>
        <div class="container  justify-content-center">
            <div class="col-12">
                <div class="p-0">
                    <div class="col-12">
                        <img id="cont_img_noticia" class="img-fluid-top w-30 h-30 mr-4 mb-4" src="<?php echo $ruta_imagen ?>" alt="">
                        <p class="text-justify">
                            <?php echo $noticia ?>
                        </p>
                    </div>
                </div>
                <div class="container col-12 text-center mb-4 mt-4">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-5 col-md-5 col-12">
                            <span class="text-muted"> Publicado el: <?php echo $fecha_complete; ?></span>
                        </div>
                        <div class="col-lg-4 col-md-5 col-12">
                            <?php if ($ruta_archivo != $comparador . "") {
                                echo '<a style="color:black;" href="' . $ruta_archivo . '" download="Noticias.pdf"><i style="color:red;" class="fas fa-file-pdf mr-3"></i>Descargar Archivo Adjunto</a>';
                            } ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- fin contenido -->






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