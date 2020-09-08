<!-- Codigo del preloader -->
<style>
    #wrap-preload {
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 1032;
    }

    #wrap-preload.close {
        opacity: 0;
        visibility: hidden;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    #wrap-preload>img.gif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
        height: 15%;
    }
</style>
<div id="wrap-preload">
    <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
</div>
<script>
    var loader = document.getElementById("wrap-preload");
    window.addEventListener("load", function() {
        loader.style.visibility = "hidden";
    });
</script>
<!-- Fin de codigo preloader -->

<section class="sticky-top bg-light">
    <!--SECCION REDES -->
    <section id="redes" class="py-3">

        <div class="container d-flex align-items-center justify-content-end">

            <a target="_blank" href="<?php echo $redes_sociales['instagram']['link'] ?>" class="">
                <i class="fab fa-instagram"></i>
            </a>

            <a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>" class="ml-3 mr-5">
                <i class="<?php echo $datos_contacto['whatsapp']['icono'] ?>"> </i>
            </a>

            <div class="mr-3 d-flex align-items-center">
                <i id="icono_modal_direccion" data-toggle="modal" data-target="#direccion_modal" class="magenta mr-2 <?php echo $datos_contacto['direccion']['icono'] ?>"></i>
                <p class="d-none d-lg-flex d-xl-flex"><?php echo $datos_contacto['direccion']['direccion'] ?></p>
            </div>

            <a class="mr-3 d-flex align-items-center" target="_blank" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>">
                <i class="magenta mr-2 <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"></i>
                <p class="d-none d-xl-block d-lg-none"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></p>
            </a>

            <a class="d-flex align-items-center" target="_blank" href="tel:<?php echo $datos_contacto['celular']['link'] ?>">
                <i class="magenta mr-2 <?php echo $datos_contacto['celular']['icono'] ?>"></i>
                <p class="d-none d-xl-block d-lg-none"><?php echo $datos_contacto['celular']['imprimir'] ?></p>
            </a>

        </div>

    </section>
    <!-- SECCION REDES -->

    <!-- MENU -->
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light container">

            <!-- LOGO -->
            <a href="index.php" class="imagen_logo">
                <img class="w-100 h-100" src="images/logo.png" alt="">
            </a>
            <!-- LOGO -->


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- MENU -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ">

                    <li class="d-flex align-items-center nav-item active">
                        <a class="nav-link <?php if ($page == 'Inicio') {
                                                echo 'activo';
                                            } ?>" href="index.php "> Inicio </a>
                    </li>

                    <li class="d-flex align-items-center nav-item">
                        <a class="nav-link <?php if ($page == 'Nosotros') {
                                                echo 'activo';
                                            } ?>" href="nosotros.php"> Nosotros </a>
                    </li>

                    <li class="d-flex align-items-center nav-item">
                        <a class="nav-link <?php if ($page == 'Servicios') {
                                                echo 'activo';
                                            } ?>" href="servicios.php"> Servicios </a>
                    </li>

                    <li class="d-flex align-items-center nav-item">
                        <a class="nav-link <?php if ($page == 'Inmuebles') {
                                                echo 'activo';
                                            } ?>" href="inmuebles.php?"> Inmuebles </a>
                    </li>

                    <li class="nav-item dropdown m-lg-auto m-xl-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nova Interactiva
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=978&tipo=2"> Arrendatarios </a>
                            <a class="dropdown-item" target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=978&tipo=1"> Propietarios </a>
                            <a class="dropdown-item" href="https://gateway2.tucompra.com.co/sites/novainm" target="_blank"> Pagos PSE </a>
                        </div>
                    </li>

                    <li class="d-flex align-items-center nav-item">
                        <a class="nav-link <?php if ($page == 'Blog') {
                                                echo 'activo';
                                            } ?>" href="blog.php"> Blog </a>
                    </li>

                    <li class="d-flex align-items-center nav-item">
                        <a class="nav-link <?php if ($page == 'Contáctanos') {
                                                echo 'activo';
                                            } ?>" href="contactenos.php"> Contáctanos </a>
                    </li>


                    <!-- LOGO PSE -->
                    <a class="logopse nav-link" href="https://gateway2.tucompra.com.co/sites/novainm" target="_blank">
                        <img class="w-100 h-100" src="images/logopse.png" alt="">
                    </a>
                    <!-- LOGO PSE -->

                </ul>

            </div>
            <!-- MENU -->

        </nav>

    </header>
    <!-- MENU -->
</section>

<div class="modal fade" id="direccion_modal" tabindex="-1" role="dialog" aria-labelledby="direccion_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title magenta" id="exampleModalLabel"> Dirección </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="w-100 h-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2237019541653!2d-75.60375298590682!3d6.234215428189852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429969bf605a1%3A0xc2f64e3ad34d244d!2sCl.%2032%20%2380a-75%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1584477889250!5m2!1ses!2sco" class="w-100" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <p class="mt-4"><?php echo $datos_contacto['direccion']['direccion'] ?></p>

            </div>
        </div>
    </div>
</div>