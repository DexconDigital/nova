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
    <?php include 'layout/header.php' ?>
    <!-- HEADER -->

    <section class="mt-5 text-justify container">

        <h2 class="text-center font-weight-bold mb-5"> Consigna tu <span class="magenta">inmueble</span> </h2>


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

                <div class="form-group col-12">
                    <textarea style="height:100px" class="form-control" placeholder="Observaciones"></textarea>
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

                <!-- DEPARTAMENTO -->
                <div class="form-group col-6">

                    <p class="mb-2"> Departamento<span class="rojo">*</span> </p>

                    <select required name="" id="" class="form-control">
                        <option disabled selected> - Departamento -</option>
                        <option value="0"> </option>
                        <option value="1"> </option>
                    </select>

                </div>
                <!-- DEPARTAMENTO -->

                <!-- TIPO DE SERVICIO -->
                <div class="form-group col-6">
                    <p class="mb-2"> Tipo de Servicio<span class="rojo">*</span> </p>

                    <select required name="" id="" class="form-control">
                        <option disabled selected> - Tipo de Servicio -</option>
                        <option value="0"> Arriendo </option>
                        <option value="1"> Venta </option>
                    </select>

                </div>
                <!-- TIPO DE SERVICIO -->


                <!-- MUNICIPIO -->
                <div class="form-group col-6">

                    <p class="mb-2"> Municipio<span class="rojo">*</span> </p>

                    <select required name="" id="" class="form-control">
                        <option disabled selected> - Municipio -</option>
                        <option value="0"> </option>
                        <option value="1"> </option>
                    </select>

                </div>
                <!-- MUNICIPIO -->

                <!-- VALOR DE ARRIENDO -->
                <div class="form-group col-6">
                    <p class="mb-2"> Valor de Arriendo </p>
                    <input type="number" class="form-control" placeholder="Valor de Arriendo">
                </div>
                <!-- VALOR DE ARRIENDO -->


                <!-- BARRIO -->
                <div class="form-group col-6">

                    <p class="mb-2"> Barrio </p>

                    <select required name="" id="" class="form-control">
                        <option disabled selected> - Barrio -</option>
                        <option value="0"> </option>
                        <option value="1"> </option>
                    </select>

                </div>
                <!-- BARRIO -->

                <!-- VALOR DE VENTA -->
                <div class="form-group col-6">
                    <p class="mb-2"> Valor de Venta </p>
                    <input type="number" class="form-control" placeholder="Valor de Venta">
                </div>
                <!-- VALOR DE VENTA -->

                <!-- DIRECCIÓN -->
                <div class="form-group col-6">
                    <p class="mb-2"> Dirección </p>
                    <input type="text" class="form-control" placeholder="Dirección">
                </div>
                <!-- DIRECCIÓN -->


                <!-- VALOR DE ARRIENDO (USD)-->
                <div class="form-group col-6">
                    <p class="mb-2"> Valor de Arriendo (USD) </p>
                    <input type="number" class="form-control" placeholder="Valor de Arriendo">
                </div>
                <!-- VALOR DE ARRIENDO -->

                <!-- ESTRATO -->
                <div class="form-group col-6">

                    <p class="mb-2"> Estrato </p>

                    <select required name="" id="" class="form-control">
                        <option disabled selected> - Estrato -</option>
                        <option value="0"> Uno </option>
                        <option value="1"> Dos </option>
                        <option value="1"> Tres </option>
                        <option value="1"> Cuatro </option>
                        <option value="1"> Cinco </option>
                        <option value="1"> Seis </option>
                        <option value="1"> No Estratificada </option>
                    </select>

                </div>
                <!-- ESTRATO -->


                <!-- VALOR DE VENTA -->
                <div class="form-group col-6">
                    <p class="mb-2"> Valor de Venta (USD) </p>
                    <input type="number" class="form-control" placeholder="Valor de Venta">
                </div>
                <!-- VALOR DE VENTA -->

                <!-- AREA -->
                <div class="form-group col-6">
                    <p class="mb-2"> Área (M<sup class="rojo">2</sup>) </p>
                    <input type="number" class="form-control" placeholder="Área">
                </div>
                <!-- AREA -->


            </div>
            <!-- DATOS PRINCIPALES DE PROPIEDAD -->


            <!-- CARACTETISTICAS DE PROPIEDAD -->
            <h5 class="text-muted my-2 d-inline-block"> Características de Propiedad </h5>

            <div class="d-flex flex-wrap">


                <!-- ESTADO DEL INMUEBLE -->
                <div class="form-group col-12">
                    <p class="mb-2"> Estado del Inmueble </p>
                    <textarea class="form-control"></textarea>
                </div>
                <!-- ESTADO DEL INMUEBLE -->

                <!-- CODIGO FINCARAIZ -->
                <div class="form-group col-6">
                    <p class="mb-2"> Código FincaRaiz </p>
                    <input type="number" class="form-control">
                </div>
                <!-- CODIGO FINCARAIZ -->

                <!-- COLOR DE PARED -->
                <div class="form-group col-6">
                    <p class="mb-2"> Color de pared </p>
                    <select class="form-control" name="" id="">
                        <option value="0" disabled selected> Color de pared </option>
                        <option value="1"> Rojo </option>
                        <option value="2"> Azul </option>
                        <option value="3"> Verde </option>
                        <option value="4"> Blanco </option>
                    </select>
                </div>
                <!-- COLOR DE PARED -->

                <!-- NUMERO DE HABITACIONES -->
                <div class="form-group col-6">
                    <p class="mb-2"> N° Habitaciones </p>
                    <input type="number" class="form-control">
                </div>
                <!-- NUMERO DE HABITACIONES -->

                <!-- NUMERO DE BAÑOS -->
                <div class="form-group col-6">
                    <p class="mb-2"> N° de Baños </p>
                    <input type="number" class="form-control">
                </div>
                <!-- NUMERO DE BAÑOS -->

                <!-- NUMERO DE PISO -->
                <div class="form-group col-6">
                    <p class="mb-2"> N° de Piso </p>
                    <input type="number" class="form-control">
                </div>
                <!-- NUMERO DE PISO -->

                <!-- ANTIGUEDAD DEL INMUEBLE -->
                <div class="form-group col-6">
                    <p class="mb-2"> Antigüedad del Inmueble </p>
                    <input type="number" placeholder="Años" class="form-control">
                </div>
                <!-- ANTIGUEDAD DEL INMUEBLE -->

                <!-- CHECKBOX CON CARACTERISTICAS DEL INMUEBLE -->
                <div class="col-12 form-group d-flex flex-wrap">

                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Barra estilo americano </label>
                    </div>

                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Citófono </label>
                    </div>

                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Cuarto de servicio </label>
                    </div>

                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Instalación de gas </label>
                    </div>

                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Zona de lavandería </label>
                    </div>

                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Alarma </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Baño Auxiliar </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Cocina Integral </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Depósito/Bodega </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Patio </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Amoblado </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Calentador </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Cocina tipo Americano </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Estudio </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Piso en Baldosa/Mármol </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Balcón </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Chimenea </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Comedor auxiliar </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Hall de Alcobas </label>
                    </div>


                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Sauna / Turco / Jacuzzi </label>
                    </div>

                    <div class="col-6">
                        <input type="checkbox" name="" class="" id=""></input>
                        <label for=""> Aire Acondicionado </label>
                    </div>


                </div>
                <!-- CHECKBOX CON CARACTERISTICAS DEL INMUEBLE -->


            </div>
            <!-- CARACTETISTICAS DE PROPIEDAD -->


            <div class="col-12 border-top pt-2">
                <input type="checkbox" name="" class="" id=""></input>
                <label for=""> Envíame una copia </label>
            </div>

            <div class="col-12 text-center">
                <button class="btn boton2">Enviar</button>
            </div>




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