<div class="subir">
    <div class="position-absolute w-100 h-100 efecto"></div>
    <i class="icono position-absolute w-100 h-100 fas fa-angle-up"></i>
</div>


<footer class="mt-5 p-5 position-relative">

    <div class="caja_negra position-absolute w-100 h-100"></div>

    <section class="position-relative py-5 blanco rounded">

        <div class="container d-flex flex-wrap">

            <!-- LOGO Y MATRICULA -->
            <div class="col-12 col-lg-3 col-xl-3 ">

                <div class="imagen_logo m-auto">
                    <a href="index.php">
                        <img class="w-100 h-100" src="images/logo.png" alt="">
                    </a>
                </div>

                <p class="text-center text-lg-start text-xl-start mb-2"> -Matrícula inmobiliaria M.A.V.U. No 0071-17 </p>
                <p class="text-justify text-lg-start text-xl-start"> <span class="font-weight-bold">NOVA INMOBILIARIA</span> es una empresa conformada por jóvenes emprendedores, con amplia trayectoria en el sector inmobiliario y legal. </p>



            </div>
            <!-- LOGO Y MATRICULA -->

            <!-- DESCARGA DE FORMULARIOS -->
            <div class="col-12 col-md-4 col-lg-3 col-xl-3 d-flex flex-column mt-4 mt-lg-0 mt-xl-0">

                <p class="text-center text-lg-start text-xl-start font-weight-bold mb-4"> Descarga Formularios </p>

                <div class="w-100 mb-2 "> <a target="_blank" href="http://www.ellibertador.co/wps/portal/el-libertador/home" class="w-100 btn boton_footer"> El Libertador </a></div>
                <div class="w-100"> <a target="_blank" href="https://www.sura.com/seguro-arrendamiento/secciones/descargas.aspx" class="w-100 btn boton_footer"> Sura </a></div>

            </div>
            <!-- DESCARGA DE FORMULARIOS -->


            <!-- HORARIOS DE ATENCIÓN -->
            <div class="col-12 col-md-5 col-lg-3 col-xl-3 d-flex flex-column mt-4 mt-lg-0 mt-xl-0">

                <p class="font-weight-bold mb-4 text-center"> Horarios de atención </p>

                <p class="p-2 horario border rounded">De lunes a viernes de 8:00 a.m. a 1:00 p.m. y de 2:00 p.m. a 5:00 p.m. </p>
                <p class="p-2 horario border rounded mt-1"> Sábados de 8:00 a.m. a 12:00 p.m. </p>

            </div>
            <!-- HORARIOS DE ATENCIÓN -->


            <!-- DATOS DE CONTACTO -->
            <div class="col-12 col-md-3 col-lg-3 col-xl-3 d-flex flex-wrap justify-content-center justify-content-lg-start justify-content-xl-start mt-4 mt-lg-0 mt-xl-0">

                <p class="font-weight-bold w-100 text-center mb-2 mb-lg-0 mb-xl-0"> Datos de contacto </p>

                <a class="mr-0 mr-lg-3 mr-xl-3 d-flex align-items-center" target="_blank" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>">
                    <i class="icono mr-3 mr-lg-2 mr-xl-2 <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"></i>
                    <p class="d-none d-lg-block d-xl-block"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></p>
                </a>

                <a class="d-flex align-items-center" target="_blank" href="tel:<?php echo $datos_contacto['celular']['link'] ?>">
                    <i class="icono mr-3 mr-lg-2 mr-xl-2 <?php echo $datos_contacto['celular']['icono'] ?>"></i>
                    <p class="d-none d-lg-block d-xl-block"><?php echo $datos_contacto['celular']['imprimir'] ?></p>
                </a>

                <a class="mr-0 mr-lg-3 mr-xl-3 d-flex align-items-center" target="_blank" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>">
                    <i class="icono mr-3 mr-lg-2 mr-xl-2 <?php echo $datos_contacto['correo']['icono'] ?>"></i>
                    <p class="d-none d-lg-block d-xl-block"><?php echo $datos_contacto['correo']['correo'] ?></p>
                </a>

                <div class="mr-0 mr-lg-3 mr-xl-3 d-flex align-items-center align-items-lg-baseline align-items-xl-baseline">
                    <i id="icono_modal_direccion" class="icono mr-0 mr-lg-2 mr-xl-2 <?php echo $datos_contacto['direccion']['icono'] ?>" data-toggle="modal" data-target="#direccion_modal"></i>
                    <p class="d-none d-lg-block d-xl-block"><?php echo $datos_contacto['direccion']['direccion'] ?></p>
                </div>

                <div class="d-flex align-items-center mt-2 mt-lg-0 mt-xl-0 justify-content-center justify-content-lg-start justify-content-xl-start w-100">

                    <a target="_blank" href="<?php echo $redes_sociales['instagram']['link'] ?>" class="mr-2 mr-lg-0 mr-xl-0">
                        <i class="icono fab fa-instagram"></i>
                    </a>

                    <a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>" class="ml-0 ml-lg-3 ml-xl-3 mr-0 mr-lg-5 mr-xl-5">
                        <i class="icono <?php echo $datos_contacto['whatsapp']['icono'] ?>"> </i>
                    </a>

                </div>


            </div>
            <!-- DATOS DE CONTACTO -->


            <!-- COPYRIGHT -->
            <section id="copy" class="col-12 text-center mt-5">
                <p> Diseñado y Desarrollado por <a target="_blank" href="https://www.dexcondigital.com/">Dexcon Digital</a> ©Copyright 2020 para Inmobiliaria Nova. Todos
                    los derechos reservados. </p>
            </section>
            <!-- COPYRIGHT -->





        </div>

    </section>

</footer>