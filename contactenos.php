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

        <div class="imagen_contactanos position-absolute w-100 h-100"></div>
        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="blanco w-100 h-100 d-flex align-items-center justify-content-center contenido position-relative">

            <h1 class="font-weight-bold"> Contáctanos </h1>

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
                    <textarea placeholder="Mensaje" class="form-control"></textarea>
                </div>

                <div class="d-flex align-items-baseline col-12 mb-4">
                    <input type="checkbox" class="d-flex align-items-center justify-content-center mr-2"> Confimo que he leído, entendido y acepto la <a class="ml-1 color_a_contacto" href="archivos/tratamiento_datos.pdf" download="Politica de tratamiento de datos personales"> política de tratamiento de datos personales.</a>
                </div>

                <div class="col-12 text-center">
                    <button class="btn boton2"> Enviar </button>
                </div>

            </form>

            <!-- FORMULARIO DE CONTACTO -->

            <!-- HORARIO -->
            <div class="horario mt-5 align-items-center d-flex justify-content-center">

                <i class="icono mr-5 <?php echo  $datos_contacto['horario']['icono'] ?>"></i>
                <p> De lunes a viernes de 8:00 a.m. a 1:00 p.m. y de 2:00 p.m. a 5:00 p.m. <br/>Sábados de 8:00 a.m. a 12:00 p.m. </p>


            </div>
            <!-- HORARIO -->


        </div>

    </section>


    <!-- MAPA -->

    <section id="mapa" class="mb-n5 mt-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.21063995129!2d-75.60382848474922!3d6.235942528168255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442996e7a7331d%3A0x67741fcf63a67712!2sCl.%2032C%20%2380a-75%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1583247947367!5m2!1ses!2sco" class="w-100 h-100" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>

    <!-- MAPA -->








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