<?php require 'variables/variables.php';
$page = "Solicitar Inmueble" ?>
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

    <section class="mt-5 text-justify container">

        <h2 class="text-center font-weight-bold mb-5"> Solicitar un <span class="magenta">inmueble</span> </h2>

        <p> No encontraste la propiedad que buscabas? Permítenos ayudarte y asesorarte de la mejor manera, diligencia el siguiente formulario y cuéntanos el tipo de propiedad que buscas y nuestro sistema junto con nuestros asesores de bienes raices realizarán la búsqueda por ti. </p>

        <br />

        <p> Al registrar tu solicitud, ésta queda en nuestra base de datos y de esta forma nuestro novedoso sistema administrativo, comparará cada inmueble ingresado y si encuentra uno que sea igual o similar al que deseas se te notificará de forma automática a tu correo electrónico. </p>

        <h5 class="font-weight-bold text-center mt-5"> No busques más, nosotros lo hacemos por ti.</h5>

        <form action="" class="mt-5">


            <!-- DATOS BASICOS -->
            <h5 class="text-muted mb-2 d-inline-block"> Datos Básicos </h5>

            <div class="d-flex flex-wrap">

                <div class="form-group col-6">
                    <p class="mb-2"> Nombres<span class="rojo">*</span> </p>
                    <input type="text" class="form-control" required placeholder="Nombres*">
                </div>

                <div class="form-group col-6">
                    <p class="mb-2"> Email<span class="rojo">*</span> </p>
                    <input type="mail" class="form-control" required placeholder="Email*">
                </div>

                <div class="form-group col-6">
                    <p class="mb-2"> Apellidos<span class="rojo">*</span> </p>
                    <input type="text" class="form-control" required placeholder="Apellidos*">
                </div>

                <div class="form-group col-6">
                    <p class="mb-2"> Teléfono<span class="rojo">*</span> </p>
                    <input type="number" class="form-control" required placeholder="Teléfono*">
                </div>

            </div>
            <!-- DATOS BASICOS -->


            <!-- DATOS PRINCIPALES DE PROPIEDAD -->
            <h5 class="text-muted my-2 d-inline-block"> Datos Principales de Propiedad </h5>

            <div class="d-flex flex-wrap">

                <!-- TIPO DE INMUEBLE -->
                <div class="form-group col-6">
                    <p class="mb-2"> Tipo de Inmueble<span class="rojo">*</span> </p>
                    <select required name="" id="" class="form-control">
                        <option disabled selected> - Tipo de Inmueble -</option>
                        <option value="0"> Apartaestudio </option>
                        <option value="1"> Apartamento </option>
                        <option value="2"> Bodega </option>
                        <option value="3"> Casa </option>
                        <option value="4"> Finca </option>
                        <option value="5"> Local </option>
                        <option value="6"> Oficina </option>
                        <option value="7"> Lote </option>
                        <option value="8"> Finca Productiva </option>
                        <option value="9"> Casa finca </option>
                        <option value="10"> Amoblados </option>
                        <option value="11"> Edificio </option>
                    </select>
                </div>
                <!-- TIPO DE INMUEBLE -->

                <!-- TIPO DE SERVICIO -->
                <div class="form-group col-6">
                    <p class="mb-2"> Tipo de Servicio<span class="rojo">*</span> </p>
                    <select required name="" id="" class="form-control">
                        <option disabled selected> - Tipo de Servicio -</option>
                        <option value="0"> Arriendo </option>
                        <option value="0"> Venta </option>

                    </select>
                </div>
                <!-- TIPO DE SERVICIO -->

                 <!-- TIPO DE SERVICIO -->
                 <div class="form-group col-6">
                    <p class="mb-2"> Valor de Arriendo </p>
                   <input type="text" class="form-control" placeholder="Valor de Arriendo">
                </div>
                <!-- TIPO DE SERVICIO -->

                 <!-- TIPO DE SERVICIO -->
                 <div class="form-group col-6">
                    <h5 class="mb-2"> Pagina en Implementación... </h5>
                   
                </div>
                <!-- TIPO DE SERVICIO -->


            </div>
            <!-- DATOS PRINCIPALES DE PROPIEDAD -->



        </form>


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