<section class="sticky-top bg-light">
    <!-- SECCION REDES -->
    <section id="redes" class="py-3">

        <div class="container d-flex align-items-center justify-content-end">

            <a href="<?php echo $redes_sociales['instagram']['link'] ?>" class="">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="<?php echo $redes_sociales['facebook']['link'] ?>" class="ml-3 mr-5">
                <i class="fab fa-facebook-f"> </i>
            </a>

            <div class="mr-3 d-flex align-items-center">
                <i class="magenta mr-2 <?php echo $datos_contacto['direccion']['icono'] ?>"></i>
                <p><?php echo $datos_contacto['direccion']['direccion'] ?></p>
            </div>

            <a class="mr-3 d-flex align-items-center" target="_blank" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>">
                <i class="magenta mr-2 <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"></i>
                <p><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></p>
            </a>

            <a class="d-flex align-items-center" target="_blank" href="tel:<?php echo $datos_contacto['celular']['link'] ?>">
                <i class="magenta mr-2 <?php echo $datos_contacto['celular']['icono'] ?>"></i>
                <p><?php echo $datos_contacto['celular']['imprimir'] ?></p>
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
                                            } ?>" href="inmuebles.php"> Inmuebles </a>
                    </li>

                    <li class="d-flex align-items-center nav-item">
                        <a class="nav-link <?php if ($page == 'Nova Interactiva') {
                                                echo 'activo';
                                            } ?>" href="nova.php"> Nova Interactiva </a>
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
                    <a class="logopse nav-link" href="#">
                        <img class="w-100 h-100" src="images/logopse.png" alt="">
                    </a>
                    <!-- LOGO PSE -->



                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->

                </ul>

            </div>
            <!-- MENU -->

        </nav>

    </header>
    <!-- MENU -->
</section>