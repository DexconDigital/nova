<?php require 'variables/variables.php';
$page = "Contáctanos" ?>
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

        <div class="imagen position-absolute w-100 h-100"></div>
        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="blanco w-100 h-100 d-flex align-items-center justify-content-center contenido position-relative">

            <h1 class="font-weight-bold"> CONTÁCTANOS </h1>

        </div>

    </section>
    <!-- BANNER -->

    <section id="contactenos">

        <h2 class="font-weight-bold text-center my-5"> Comunícate con Nosotros </h2>

        <div class="container rounded py-5">

            <!-- IMAGEN E INFORMACIÓN DE CONTACTO -->
            <div class="d-flex align-items-center justify-content-center">

                <!-- IMAGEN -->
                <div class="imagen">
                    <img class="w-100 h-100" src="images/logo.png" alt="">
                </div>
                <!-- IMAGEN -->

                <!-- INFORMACION DE CONTACTO -->
                <div class="col-5">

                    <div class="mb-2 align-items-baseline d-flex">
                        <i class="mr-2 <?php echo $datos_contacto['direccion']['icono'] ?>"></i>
                        <p> <?php echo $datos_contacto['direccion']['direccion'] ?> </p>
                    </div>

                    <a target="_blank" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>" class="mb-2 align-items-center d-flex">
                        <i class="mr-2 <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"></i>
                        <p> <?php echo $datos_contacto['telefono_fijo']['imprimir'] ?> </p>
                    </a>

                    <a target="_blank" href="tel:<?php echo $datos_contacto['celular']['link'] ?>" class="mb-2 align-items-center d-flex">
                        <i class="mr-2 <?php echo $datos_contacto['celular']['icono'] ?>"></i>
                        <p> <?php echo $datos_contacto['celular']['imprimir'] ?> </p>
                    </a>

                    <a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>" class="mb-2 align-items-center d-flex">
                        <i class="mr-2 <?php echo $datos_contacto['whatsapp']['icono'] ?>"></i>
                        <p> <?php echo $datos_contacto['whatsapp']['imprimir'] ?> </p>
                    </a>

                    <a target="_blank" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>" class="mb-2 align-items-center d-flex">
                        <i class="mr-2 <?php echo $datos_contacto['correo']['icono'] ?>"></i>
                        <p> <?php echo $datos_contacto['correo']['correo'] ?> </p>
                    </a>

                </div>
                <!-- INFORMACION DE CONTACTO -->


            </div>
            <!-- IMAGEN E INFORMACIÓN DE CONTACTO -->

            <!-- FORMULARIO DE CONTACTO -->

            <form action="" class="d-flex flex-wrap formulario mt-5">

                <div class="mb-3 nombre col-6">
                    <input type="text" placeholder="Nombre" class="form-control">
                </div>

                
                <div class="mb-3 mail col-6">
                    <input type="mail" placeholder="Mail" class="form-control">
                </div>


                
                <div class="mb-3 telefono col-6">
                    <input type="number" placeholder="Teléfono" class="form-control">
                </div>


                
                <div class="mb-3 texto col-12">
                    <textarea class="form-control"> </textarea>
                </div>


              


            </form>

            <!-- FORMULARIO DE CONTACTO -->


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