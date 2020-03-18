<?php

// modelo inmueble propiedades destacadas
function modelo_inmueble($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("978-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '




        <div class="h-100 carousel-item">

        <!-- IMAGEN INMUEBLE -->
        <a href="./detalle_inmueble.php?co=' . $codigo . '"><img src="' . $imagen . '" class="h-100 d-block w-100" alt="..."></a>
        <!-- IMAGEN INMUEBLE -->

        <!-- DIRECCIÓN -->
        <div class="position-absolute titulo d-flex flex-column align-items-baseline">
            <p> <span class="azul">Apartamento</span> en <span class="magenta">Arriendo</span> </p>
            <div class="d-flex align-items-baseline">
                <i class="azul mr-1 fas fa-map-marker-alt"></i>
                <p> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </p>
            </div>
            <p class="mt-1 codigo"> Código: ' . $codigo . ' </p>
        </div>
        <!-- DIRECCIÓN -->

        <!-- ICONOS -->
        <div class="position-absolute iconos d-flex align-items-baseline flex-wrap">

            <div class="mr-2 d-flex align-items-center">
                <i class="mr-1 azul icono fas fa-chart-area"></i>
                <p> ' . $api['AreaConstruida'] . 'm<sup>2 </p>
            </div>

            <div class="mr-2 d-flex align-items-center">
                <i class="mr-1 azul icono fas fa-bed"></i>
                <p>  ' . $api['Alcobas'] . ' </p>
            </div>

            <div class="mr-2 d-flex align-items-center">
                <i class="mr-1 azul icono fas fa-bath"></i>
                <p> ' . $api['banios'] . ' </p>
            </div>

            <div class="d-flex align-items-center">
                <i class="mr-1 azul icono fas fa-warehouse"></i>
                <p> ' . $api['garaje'] . ' </p>
            </div>

            <a href="#" class="ml-2 btn boton2 precio"> ';
            if ($api['Gestion'] == 'Arriendo/venta') {
                echo '$' . $api['Canon'] . ' <br>$' . $api['Venta'];
            } else if ($api['Gestion'] == 'Arriendo') {
                echo '$' . $api['Canon'];
            } else {
                echo '$' . $api['Venta'];
            }
            echo ' </a>
            <!-- ICONOS -->


        </div>
    </div>


        ';
    }
}
//modelo inmueble de la pagina de inmuebles.php
function modelo_inmueble2($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("978-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        $descripcion = $api['descripcionlarga'];
        $limite_de_cadena = 105;
        // recortar cadena
        if (strlen($descripcion) >= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '...';
        }
        echo '



        <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-5">
            <div class="card">

                <div class="imagen">
                    <p class="gestion_inmueble position-absolute blanco font-weight-bold"> '. $api['Tipo_Inmueble'] .' en ' . $api['Gestion'] . ' </p>
                    <img src="' . $imagen . '" class="h-100 card-img-top" alt="...">
                </div>

                <div class="">

                    <!-- ICONOS BAÑOS ALCOBAS ETC -->
                    <div class="py-3 caja border-bottom d-flex justify-content-around align-items-baseline">


                        <!-- AREA -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="ml-3 mr-2 azul fas fa-chart-area"></i>
                            <p class="pr-3"> ' . $api['AreaConstruida'] . 'm<sup>2</sup></p>
                        </div>
                        <!-- AREA -->

                        <!-- BAÑOS -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bath"></i>
                            <p class="pr-3"> ' . $api['banios'] . ' </p>
                        </div>
                        <!-- BAÑOS -->

                        <!-- HABITACIONES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bed"></i>
                            <p class="pr-3"> ' . $api['Alcobas'] . ' </p>
                        </div>
                        <!-- HABITACIONES -->

                        <!-- GARAGES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mx-2   azul fas fa-warehouse"></i>
                            <p class="pr-3"> ' . $api['garaje'] . ' </p>
                        </div>
                        <!-- GARAGES -->


                    </div>
                    <!-- ICONOS BAÑOS ALCOBAS ETC -->



                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->
                    <div class="caja py-3">


                        <div class="mb-2 px-3 d-flex align-items-baseline">
                            <i class="mr-2 azul fas fa-map-marker-alt"> </i>
                            <p class="direccion"> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </p>
                        </div>

                        <p class="mb-2 px-3 text-muted"> Código: '. $codigo .' </p>
                        <p class="px-3 descripcion"> '.$descripcion.' </p>
                    </div>
                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->


                    <!-- PRECIO -->
                    <div class="precio d-flex align-items-center justify-content-center">
                        <p class="mr-2"> <span class="azul font-weight-bold">$</span> ';
                        if ($api['Gestion'] == 'Arriendo') {
                            echo $api['Canon'];
                        } else if ($api['Gestion'] == 'Venta') {
                            echo $api['Venta'];
                        } else {
                            echo $api['Canon'] . '/ $' . $api['Venta'];
                        }
                        echo ' </p>
                        <a href="detalle_inmueble.php?co=' . $codigo . '" class="my-2 btn boton2"> Ver Inmueble </a>
                    </div>
                    <!-- PRECIO -->



                </div>

            </div>
        </div>


 ';
    }
}

//similares
function modelo_inmueble_similare($r)
{

    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("978-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        $descripcion = $api['descripcionlarga'];
        $limite_de_cadena = 105;
        // recortar cadena
        if (strlen($descripcion) >= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '...';
        };

        echo '


        <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-5">
            <div class="card">

                <div class="imagen">
                    <p class="gestion_inmueble position-absolute blanco font-weight-bold"> '. $api['Tipo_Inmueble'] .' en ' . $api['Gestion'] . ' </p>
                    <img src="' . $imagen . '" class="h-100 card-img-top" alt="...">
                </div>

                <div class="">

                    <!-- ICONOS BAÑOS ALCOBAS ETC -->
                    <div class="py-3 caja border-bottom d-flex justify-content-around align-items-baseline">


                        <!-- AREA -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="ml-3 mr-2 azul fas fa-chart-area"></i>
                            <p class="pr-3"> ' . $api['AreaConstruida'] . 'm<sup>2</sup></p>
                        </div>
                        <!-- AREA -->

                        <!-- BAÑOS -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bath"></i>
                            <p class="pr-3"> ' . $api['banios'] . ' </p>
                        </div>
                        <!-- BAÑOS -->

                        <!-- HABITACIONES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mr-2 azul fas fa-bed"></i>
                            <p class="pr-3"> ' . $api['Alcobas'] . ' </p>
                        </div>
                        <!-- HABITACIONES -->

                        <!-- GARAGES -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <i class="mx-2   azul fas fa-warehouse"></i>
                            <p class="pr-3"> ' . $api['garaje'] . ' </p>
                        </div>
                        <!-- GARAGES -->


                    </div>
                    <!-- ICONOS BAÑOS ALCOBAS ETC -->



                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->
                    <div class="caja py-3">


                        <div class="mb-2 px-3 d-flex align-items-baseline">
                            <i class="mr-2 azul fas fa-map-marker-alt"> </i>
                            <p class="direccion"> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </p>
                        </div>

                        <p class="mb-2 px-3 text-muted"> Código: '. $codigo .' </p>
                        <p class="px-3 descripcion"> '.$descripcion.' </p>
                    </div>
                    <!-- DIRECCIÓN CODIGO Y DESCRIPCIÓN -->


                    <!-- PRECIO -->
                    <div class="precio d-flex align-items-center justify-content-center">
                        <p class="mr-2"> <span class="azul font-weight-bold">$</span> ';
                        if ($api['Gestion'] == 'Arriendo') {
                            echo $api['Canon'];
                        } else if ($api['Gestion'] == 'Venta') {
                            echo $api['Venta'];
                        } else {
                            echo $api['Canon'] . '/ $' . $api['Venta'];
                        }
                        echo ' </p>
                        <a href="detalle_inmueble.php?co=' . $codigo . '" class="my-2 btn boton2"> Ver Inmueble </a>
                    </div>
                    <!-- PRECIO -->



                </div>

            </div>
        </div>


    ';
    }
}
// Funciones para los modelos de propiedades
function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}
