<?php require 'variables/variables.php';
$page = "Solicitar Inmueble" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivos_header.php' ?>
    <link type="text/css" rel="stylesheet" href='css\component-chosen.css'>
    <link type="text/css" rel="stylesheet" href='css\component-chosen.min.css'>


    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>
<style>
    select:invalid {
        height: 0px !important;
        opacity: 0 !important;
        position: absolute !important;
        display: flex !important;
    }

    select:invalid[multiple] {
        margin-top: 15px !important;
    }
</style>

<body>


    <!-- HEADER -->
    <?php include 'layout/header.php' ?>
    <!-- HEADER -->

    <!-- BANNER -->
    <section id="banner" class="position-relative">

        <div class="imagen_consignar position-absolute w-100 h-100"></div>
        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="blanco w-100 h-100 d-flex align-items-center justify-content-center contenido position-relative">

            <h1 class="text-center font-weight-bold"> CONSIGNAR INMUEBLE </h1>

        </div>

    </section>
    <!-- BANNER -->

    <section class="mt-5 text-justify container">

        <h2 class="text-center font-weight-bold mb-5"> Consigna tu <span class="magenta">inmueble</span> </h2>


        <form action="email/emailconsigna.php" method="POST" autocomplete="off" class="mt-5">


            <!-- DATOS BASICOS -->
            <h5 class="text-muted mb-2 d-inline-block"> Datos Básicos </h5>

            <div class="d-flex flex-wrap">

                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Nombres<span class="rojo">*</span> </p>
                    <input type="text" name="Nombre" class="form-control" placeholder="Nombres*" required>
                </div>

                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Email<span class="rojo">*</span> </p>
                    <input type="email" name="Correo" class="form-control" placeholder="Email*" required>
                </div>

                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Apellidos<span class="rojo">*</span> </p>
                    <input type="text" name="Apellido" class="form-control" placeholder="Apellidos*" required>
                </div>

                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Teléfono<span class="rojo">*</span> </p>
                    <input type="number" name="Telefono" class="form-control" placeholder="Teléfono*" required>
                </div>

                <div class="form-group col-12">
                    <textarea style="height:100px" name="Mensaje_ob" class="form-control" placeholder="Observaciones"></textarea>
                </div>

            </div>
            <!-- DATOS BASICOS -->


            <!-- DATOS PRINCIPALES DE PROPIEDAD -->
            <h5 class="text-muted my-2 d-inline-block"> Datos Principales de Propiedad </h5>

            <div class="d-flex flex-wrap">

                <!-- TIPO DE INMUEBLE -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Tipo de Inmueble<span class="rojo">*</span> </p>

                    <select name="Tipo_Inmueble" class="form-control" required>
                        <option value=""> - Tipo de Inmueble -</option>
                        <option value="Apartaestudio"> Apartaestudio </option>
                        <option value="Apartamento"> Apartamento </option>
                        <option value="Bodega"> Bodega </option>
                        <option value="Casa"> Casa </option>
                        <option value="Finca"> Finca </option>
                        <option value="Local"> Local </option>
                        <option value="Oficina"> Oficina </option>
                        <option value="Lote"> Lote </option>
                        <option value="Finca Productiva"> Finca Productiva </option>
                        <option value="Casa finca"> Casa finca </option>
                        <option value="Amoblados"> Amoblados </option>
                        <option value="Edificio"> Edificio </option>
                    </select>

                </div>
                <!-- TIPO DE INMUEBLE -->

                <!-- DEPARTAMENTO -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">

                    <p class="mb-2"> Departamento <span class="rojo">*</span> </p>
                    <select required="required" name="Alcaldia" id="Alcaldia" data-placeholder="- Seleccione Departamento -" class="form-control chosenAlcaldia" onchange="change(this.id, 'colonia')" onchange="change(this.id, 'letra')" value="<%= typeof Alcaldia != 'undefined' ? Alcaldia : '' %>">
                        <option value=""></option>
                        <option value="Antioquia">Antioquia</option>
                        <option value="Atlantico">Atlantico</option>
                        <option value="Bogota D.C">Bogota D.C.</option>
                        <option value="Bolivar">Bolivar</option>
                        <option value="Cesar">Cesar</option>
                        <option value="Cordoba">Cordoba</option>
                        <option value="Cundinamarca">Cundinamarca</option>
                        <option value="Huila">Huila</option>
                        <option value="Meta">Meta</option>
                    </select>

                </div>
                <!-- DEPARTAMENTO -->

                <!-- TIPO DE SERVICIO -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Tipo de Servicio<span class="rojo">*</span> </p>

                    <select name="Tipo_servi" class="form-control" required>
                        <option value=""> - Tipo de Servicio -</option>
                        <option value="Arriendo"> Arriendo </option>
                        <option value="Venta"> Venta </option>
                    </select>

                </div>
                <!-- TIPO DE SERVICIO -->


                <!-- MUNICIPIO -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">

                    <p class="mb-2"> Municipio <span class="rojo">*</span> </p>

                    <select required="required" id="colonia" name="Colonia" data-placeholder="- Seleccione Municipio -" class="form-control chosenColonia" onchange="change2(this.id, 'letra')" value="<%= typeof Colonia != 'undefined' ? Colonia : '' %>">
                        <option value=""></option>
                    </select>

                </div>
                <!-- MUNICIPIO -->

                <!-- VALOR DE ARRIENDO -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Valor de Arriendo </p>
                    <input type="number" name="valorArriendo" class="form-control" placeholder="Omitir el punto en la cifra Ej: 100000">
                </div>
                <!-- VALOR DE ARRIENDO -->


                <!-- BARRIO -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">

                    <p class="mb-2"> Barrio <span class="rojo">*</span></p>

                    <select required="required" id="letra" name="Letra" data-placeholder="- Seleccione Barrio -" class="form-control chosenLetra" value="<%= typeof Letra != 'undefined' ? Letra : '' %>">
                        <option value=""></option>
                    </select>


                </div>
                <!-- BARRIO -->

                <!-- VALOR DE VENTA -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Valor de Venta </p>
                    <input type="number" name="ValorVenta" class="form-control" placeholder="Omitir el punto en la cifra Ej: 100000">
                </div>
                <!-- VALOR DE VENTA -->

                <!-- DIRECCIÓN -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Dirección </p>
                    <input type="text" name="Direccion" class="form-control" placeholder="Dirección">
                </div>
                <!-- DIRECCIÓN -->


                <!-- VALOR DE ARRIENDO (USD)-->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Valor de Arriendo (USD) </p>
                    <input type="number" name="valorArriendoUSD" class="form-control" placeholder="Omitir el punto en la cifra Ej: 100000">
                </div>
                <!-- VALOR DE ARRIENDO -->

                <!-- ESTRATO -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">

                    <p class="mb-2"> Estrato </p>

                    <select name="Estrato" class="form-control">
                        <option value="No Especificado"> - Estrato -</option>
                        <option value="Uno"> Uno </option>
                        <option value="Dos"> Dos </option>
                        <option value="Tres"> Tres </option>
                        <option value="Cuatro"> Cuatro </option>
                        <option value="Cinco"> Cinco </option>
                        <option value="Seis"> Seis </option>
                        <option value="No Estratificada"> No Estratificada </option>
                    </select>

                </div>
                <!-- ESTRATO -->


                <!-- VALOR DE VENTA -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Valor de Venta (USD) </p>
                    <input type="number" name="ValorVentaUSD" class="form-control" placeholder="Valor de Venta">
                </div>
                <!-- VALOR DE VENTA -->

                <!-- AREA -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Área (M<sup class="rojo">2</sup>) </p>
                    <input type="number" name="area" class="form-control" placeholder="Área">
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
                    <textarea name="mensaje_estado_inmueble" class="form-control"></textarea>
                </div>
                <!-- ESTADO DEL INMUEBLE -->

                <!-- CODIGO FINCARAIZ -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Código FincaRaiz </p>
                    <input type="number" name="codigofincaR" class="form-control">
                </div>
                <!-- CODIGO FINCARAIZ -->

                <!-- COLOR DE PARED -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Color de pared </p>
                    <select class="form-control" name="colores">
                        <option value="No Especificado"> Color de pared </option>
                        <option value="Rojo"> Rojo </option>
                        <option value="Azul"> Azul </option>
                        <option value="Verde"> Verde </option>
                        <option value="Blanco"> Blanco </option>
                    </select>
                </div>
                <!-- COLOR DE PARED -->

                <!-- NUMERO DE HABITACIONES -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> N° Habitaciones </p>
                    <input type="number" name="numerohabitaciones" class="form-control">
                </div>
                <!-- NUMERO DE HABITACIONES -->

                <!-- NUMERO DE BAÑOS -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> N° de Baños </p>
                    <input type="number" name="numeroban" class="form-control">
                </div>
                <!-- NUMERO DE BAÑOS -->

                <!-- NUMERO DE PISO -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> N° de Piso </p>
                    <input type="number" name="numpisos" class="form-control">
                </div>
                <!-- NUMERO DE PISO -->

                <!-- ANTIGUEDAD DEL INMUEBLE -->
                <div class="form-group col-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mb-2"> Antigüedad del Inmueble </p>
                    <input type="number" name="Antiguedadinm" placeholder="Años" class="form-control">
                </div>
                <!-- ANTIGUEDAD DEL INMUEBLE -->

                <!-- CHECKBOX CON CARACTERISTICAS DEL INMUEBLE -->
                <div class="col-12 form-group d-flex flex-wrap">

                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option1" value="Si Aplica" id=""></input>
                        <label for=""> Barra estilo americano </label>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option2" value="Si Aplica" id=""></input>
                        <label for=""> Citófono </label>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option3" value="Si Aplica" id=""></input>
                        <label for=""> Cuarto de servicio </label>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option4" value="Si Aplica" id=""></input>
                        <label for=""> Instalación de gas </label>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option5" value="Si Aplica" id=""></input>
                        <label for=""> Zona de lavandería </label>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option6" value="Si Aplica" id=""></input>
                        <label for=""> Alarma </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option7" value="Si Aplica" id=""></input>
                        <label for=""> Baño Auxiliar </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option8" value="Si Aplica" id=""></input>
                        <label for=""> Cocina Integral </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option9" value="Si Aplica" id=""></input>
                        <label for=""> Depósito/Bodega </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option10" value="Si Aplica" id=""></input>
                        <label for=""> Patio </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option11" value="Si Aplica" id=""></input>
                        <label for=""> Amoblado </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option12" value="Si Aplica" id=""></input>
                        <label for=""> Calentador </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option13" value="Si Aplica" id=""></input>
                        <label for=""> Cocina tipo Americano </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option14" value="Si Aplica" id=""></input>
                        <label for=""> Estudio </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option15" value="Si Aplica" id=""></input>
                        <label for=""> Piso en Baldosa/Mármol </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option16" value="Si Aplica" id=""></input>
                        <label for=""> Balcón </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option17" value="Si Aplica" id=""></input>
                        <label for=""> Chimenea </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option18" value="Si Aplica" id=""></input>
                        <label for=""> Comedor auxiliar </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option19" value="Si Aplica" id=""></input>
                        <label for=""> Hall de Alcobas </label>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option20" value="Si Aplica" id=""></input>
                        <label for=""> Sauna / Turco / Jacuzzi </label>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <input type="checkbox" name="option21" value="Si Aplica" id=""></input>
                        <label for=""> Aire Acondicionado </label>
                    </div>


                </div>
                <!-- CHECKBOX CON CARACTERISTICAS DEL INMUEBLE -->


            </div>
            <!-- CARACTETISTICAS DE PROPIEDAD -->


            <div class="col-12 border-top pt-2">
                <input type="checkbox" name="copia" value="lleno" class="" id=""></input>
                <label for=""> Envíame una copia </label>
            </div>
            <div class="g-recaptcha col-12" data-sitekey="6LcQjsAZAAAAAH5DNhksrL_5c5ULIrUROJwxT6eq" required></div>
            <div class="col-12 mb-4"><small id="tituloHepl" class="form-text text-muted">Este campo es obligatorio</small></div>
            <div class="col-12 text-center">
                <button class="btn boton2" type="submit" value="Submit">Enviar</button>
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
        <script type="text/javascript" src='js\colonias.js'></script>
        <script src="js\chosen.jquery.js" type="text/javascript"></script>
    </section>
    <!-- ARCHIVOS FOOTER -->

    <script>
        //chosen institución
        $('.chosenAlcaldia, .chosenColonia, .chosenLetra').chosen({
            no_results_text: "No hay resultados...",
            allow_single_deselect: true
        });
        $(".chosenAlcaldia").chosen().on("change", function(event) {
            document.getElementById('colonia').value = "";
            document.getElementById('letra').value = "";
            $(".chosenColonia").trigger('chosen:updated');
            $(".chosenLetra").trigger('chosen:updated');
        });

        $(".chosenColonia").chosen().on("change", function(event) {
            document.getElementById('letra').value = "";
            $(".chosenLetra").trigger('chosen:updated');
        });
        $(".chosenColonia").chosen().on("chosen:showing_dropdown", function(event) {
            $(".chosenColonia").trigger('chosen:updated');
        });

        $(".chosenLetra").chosen().on("chosen:showing_dropdown", function(event) {
            $(".chosenLetra").trigger('chosen:updated');
        });

        $('.form-control-chosen').chosen();
    </script>
    <script>
        $('select').chosen({
            allow_single_deselect: true
        });
    </script>

    <!-- composer require google/recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>

</body>

</html>