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


    <a href="#" class="btn boton1 position-relative">
        <p> Boton prueba hover</p>
        <div class="caja position-absolute w-100 h-100">  </div> 
    </a>





    <!-- FOOTER -->
    <!-- <footer class="mt-5">
        <?php include 'layout/footer.php' ?>
    </footer> -->
    <!-- FOOTER -->

    <!-- ARCHIVOS FOOTER -->
    <section>
        <?php include 'layout/archivos_footer.php' ?>
    </section>
    <!-- ARCHIVOS FOOTER -->


</body>

</html>