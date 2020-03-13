<?php require 'variables/variables.php';
require 'controllers/inmueblesController.php';

$page = "Inmuebles" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivos_header.php' ?>
    <link rel="stylesheet" type="text/css" href="css/rangos.css">


    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>

<body>

    <!-- HEADER -->
    <?php include 'layout/header.php' ?>
    <!-- HEADER -->

    <!-- BANNER -->
    <section id="banner" class="position-relative">

        <div class="imagen_inmuebles position-absolute w-100 h-100"></div>
        <div class="fondo_negro position-absolute w-100 h-100"></div>

        <div class="blanco w-100 h-100 d-flex align-items-center justify-content-center contenido position-relative">

            <h1 class="font-weight-bold"> Inmuebles </h1>

        </div>

    </section>
    <!-- BANNER -->

    <!-- BUSCADOR -->
    <section id="buscador2" class="mt-5 overflow-hidden">
        <div class="pt-3 pb-4 container position-relative rounded">

            <div class="col-12">
                <div class="row ">

                    <div class="col-3 form-group">
                        <input placeholder="Código" type="number" class="form-control" id="codigo_buscar" aria-describedby="emailHelp">
                    </div>

                    <div class="col-3 form-group">
                        <select class="form-control" id="tipo_inmueble_buscar">
                            <option selected default> Tipo de Inmueble </option>
                        </select>
                    </div>

                    <div class="col-3 form-group">
                        <select class="form-control" id="tipo_gestion_buscar">
                            <option selected default> Tipo de Gestión </option>
                        </select>
                    </div>

                    <div class="col-3 form-group">
                        <select class="form-control" id="ciudad_buscar">
                            <option selected default> Ciudad </option>
                        </select>
                    </div>

                    <div class="col-3 form-group">
                        <select class="form-control" id="barrio_buscar">
                            <option selected default> Barrio </option>
                        </select>
                    </div>

                    <div class="col-3 form-group">
                        <input placeholder="Baños" type="number" class="form-control" id="banios_buscar" aria-describedby="emailHelp">
                    </div>

                    <div class="col-3 form-group">
                        <input placeholder="Alcobas" type="number" class="form-control" id="alcobas_buscar" aria-describedby="emailHelp">
                    </div>

                    <div class="col-3 form-group">
                        <input placeholder="Garajes " type="number" class="form-control" id="garajes_buscar" aria-describedby="emailHelp">
                    </div>


                    <div class="col-3 form-group">
                        <!-- <p> Precio: </p>
                            <input type="range" min="1" max="100" value="50" class="rounded slider" id="myRange"> -->

                        <select id="price" class="form-control">
                            <option value="0"> Precio </option>
                            <option value="1"> $500.000 a $1.000.000</option>
                            <option value="2"> $1.000.000 a $5.000.000 </option>
                            <option value="3"> $5.000.000 a $10.000.000</option>
                            <option value="4"> $10.000.000 a $50.000.000</option>
                            <option value="5"> $50.000.000 a $100.000.000</option>
                            <option value="6"> $100.000.000 y más...</option>
                        </select>

                    </div>

                    <div class="col-3">
                        <div class="wrapper">
                            <div class="range-slider">
                                <input type="text" class="js-range-slider" value="" />
                            </div>
                            <div class="extra-controls form-inline">
                                <div class="form-group" style="display:none;">
                                    <input type="text" class="js-input-from form-control" id="area_minima_buscar" value="0" aria-describedby="emailHelp" />
                                    <input type="text" class="js-input-to form-control" id="area_maxima_buscar" value="0" aria-describedby="emailHelp" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 h-100 m-auto d-flex align-items center justify-content-center">
                        <button type="button" id="buscar" class="col-6 btn boton_footer"> Buscar </button>
                    </div>




                </div>
            </div>

        </div>
    </section>

    <!-- BUSCADOR -->


    <!-- ÚLTIMAS NOTICIAS -->

    <h2 class="text-center font-weight-bold my-5"> Imuebles Disponibles </h2>

    <section id="inmuebles" class="container mt-5 d-flex flex-wrap align-items-stretch">

        <?php $totalinmuebles = 0;

        if (is_array($api)) {
            listar_inmuebles($api['Inmuebles']);
        } else {
            echo '<div class="col-12">
                      <h2 class="text-center" >No se encontraron inmuebles</h2>
                  </div>';
        }
        ?>

        <!-- PAGINADOR -->
        <div class="col-12 text-center">
            <?php if (is_array($api)) : ?>
                <ul class="pagination mt-4 align-items-end justify-content-center">
                    <?php if ($paginator->getPrevUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo;</a></li>
                    <?php endif; ?>
                    <?php foreach ($paginator->getPages() as $page) : ?>
                        <?php if ($page['url']) : ?>
                            <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                            </li>
                        <?php else : ?>
                            <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if ($paginator->getNextUrl()) : ?>
                        <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">&raquo;</a></li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>
        </div>
        <!-- PAGINADOR -->



    </section>
    <!-- ÚLTIMAS NOTICIAS -->








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

    <script src="js/rangos.js"></script>
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/buscador.js"></script>
    <script src="conexion_api/token_api.js"></script>


</body>

</html>