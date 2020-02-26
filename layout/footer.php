<div class="subir">
    <div class="position-absolute w-100 h-100 efecto"></div>
    <i class="icono position-absolute w-100 h-100 fas fa-angle-up"></i>
</div>


<footer class="mt-5 p-5 position-relative">

    <div class="caja_negra position-absolute w-100 h-100"></div>

    <section class="position-relative py-5 blanco rounded">

        <div class="container d-flex flex-wrap">

            <!-- LOGO Y MATRICULA -->
            <div class="col-3">

                <div class="imagen_logo">
                    <a href="index.php">
                        <img class="w-100 h-100" src="images/logo.png" alt="">
                    </a>
                </div>

                <p> -Matrícula inmobiliaria M.A.V.U. No 0071-17 </p>
                <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, praesentium? </p>



            </div>
            <!-- LOGO Y MATRICULA -->

            <!-- DESCARGA DE FORMULARIOS -->
            <div class=" d-flex flex-column">

                <p class="font-weight-bold mb-4"> Descarga Formularios </p>

                <div class="w-100 mb-2 "> <a href="" class="w-100 btn boton_footer"> El Libertador </a></div>
                <div class="w-100"> <a href="" class="w-100 btn boton_footer"> Sura </a></div>

            </div>
            <!-- DESCARGA DE FORMULARIOS -->


            <!-- HORARIOS DE ATENCIÓN -->
            <div class="col-3 d-flex flex-column">

                <p class="font-weight-bold mb-4 text-center"> Horarios de atención </p>

                <p class="p-2 horario border rounded">De lunes a viernes de 8:00 a.m. a 1:00 p.m. y de 2:00 p.m. a 5:00 p.m. </p>
                <p class="p-2 horario border rounded mt-1"> Sábados de 8:00 a.m. a 12:00 p.m. </p>

            </div>
            <!-- HORARIOS DE ATENCIÓN -->

            <div class="col-3 d-flex flex-wrap">

                <p class="font-weight-bold w-100 text-center"> Datos de contacto </p>

                <a class="mr-3 d-flex align-items-center" target="_blank" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>">
                    <i class="magenta mr-2 <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"></i>
                    <p><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></p>
                </a>

                <a class="d-flex align-items-center" target="_blank" href="tel:<?php echo $datos_contacto['celular']['link'] ?>">
                    <i class="magenta mr-2 <?php echo $datos_contacto['celular']['icono'] ?>"></i>
                    <p><?php echo $datos_contacto['celular']['imprimir'] ?></p>
                </a>

                <a class="mr-3 d-flex align-items-center" target="_blank" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>">
                    <i class="magenta mr-2 <?php echo $datos_contacto['correo']['icono'] ?>"></i>
                    <p><?php echo $datos_contacto['correo']['correo'] ?></p>
                </a>

                <div class="mr-3 d-flex align-items-baseline">
                    <i class="magenta mr-2 <?php echo $datos_contacto['direccion']['icono'] ?>"></i>
                    <p><?php echo $datos_contacto['direccion']['direccion'] ?></p>
                </div>

                <div class="d-flex align-items-center justify-content-center w-100">

                    <a href="<?php echo $redes_sociales['instagram']['link'] ?>" class="">
                        <i class="icono fab fa-instagram"></i>
                    </a>

                    <a href="<?php echo $redes_sociales['facebook']['link'] ?>" class="ml-3 mr-5">
                        <i class="icono fab fa-facebook-f"> </i>
                    </a>

                </div>


            </div>





        </div>

    </section>

</footer>