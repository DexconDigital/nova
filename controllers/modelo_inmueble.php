<?php

// modelo inmueble propiedades destacadas
function modelo_inmueble($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("986-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '
        <div class="col-12 col-lg-4 col-xl-4 col-md-6">
        <div class="carta mb-5 ">
            <a href="./detalle_inmueble.php?co=' . $codigo . '" class="d-flex flex-wrap" id="inmuebles2">

                <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->
                <div class="card2 col-12 p-0 position-relative">

                    <div class="imagen w-100 h-100">
                        <img src="' . $imagen . '" class="card-img-top" alt="...">
                    </div>

                    <div class="caja_negra"> </div>

                    <div class="tipo_inmueble d-flex align-items-center">
                        <p class="ml-2"> ' . $api['Tipo_Inmueble'] . ' </p>
                    </div>

                    <div class="tipo_gestion d-flex align-items-center">
                        <p class="mr-2"> ' . $api['Gestion'] . ' </p>
                    </div>

                </div>
                <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->

                <!-- DESCRIPCIÓN DE INMUEBLE -->
                <div style="height:120px" class="contenido col-12 d-flex flex-column">

                    <div>
                        <div class="d-flex pl-3 mt-3 align-items-baseline">
                            <i class="mr-1 fas fa-map-marker-alt"></i>
                            <h4> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </h4>
                        </div>

                        <div class="ml-3 d-flex">
                            <p class="mr-5">';
                            if ($api['Gestion'] == 'Arriendo/venta') {
                                echo '$' . $api['Canon'] . ' <br>$' . $api['Venta'];
                            } else if ($api['Gestion'] == 'Arriendo') {
                                echo '$' . $api['Canon'];
                            } else {
                                echo '$' . $api['Venta'];
                            }
                            echo '</p>
                            <p class="text-muted"> Código: ' . $codigo . ' </p>
                        </div>

                    </div>

                    <!-- ICONOS -->
                    <div class="fondo_caracteristicas1 d-flex align-items-center justify-content-around">

                        <div class="d-flex py-2 align-items-center">
                            <i class="blanco fas fa-chart-area"></i>
                            <p class="blanco pl-2"> ' . $api['AreaConstruida'] . 'm<sup>2</sup> </p>
                        </div>

                        <div class="d-flex py-2 align-items-center">
                            <i class="blanco fas fa-bath"></i>
                            <p class="blanco pl-2"> ' . $api['banios'] . ' </p>
                        </div>

                        <div class="d-flex py-2 align-items-center">
                            <i class="blanco fas fa-bed"></i>
                            <p class="blanco pl-2"> ' . $api['Alcobas'] . ' </p>
                        </div>

                        <div class="d-flex py-2 align-items-center">
                            <i class="blanco fas fa-warehouse"></i>
                            <p class="blanco pl-2"> ' . $api['garaje'] . ' </p>
                        </div>

                    </div>
                    <div class="fondo_caracteristicas2"></div>
                    <div class="fondo_caracteristicas3"></div>
                    


                </div>
                

            </a>
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
        $codigo = str_ireplace("986-", "", $r[$i]['Codigo_Inmueble']);
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
        <div class="carta my-5 ">
        <a  href="./detalle_inmueble.php?co=' . $codigo . '" class="d-flex flex-wrap" id="inmuebles2">

            
            <div class="card2 col-12 col-md-6 col-lg-4 col-xl-4 p-0 position-relative">

                <div class="imagen w-100 h-100">
                    <img src="' . $imagen . '" class="card-img-top" alt="...">
                </div>

                <div class="caja_negra"> </div>

                <div class="tipo_inmueble d-flex align-items-center">
                    <p class="ml-2"> '. $api['Tipo_Inmueble'] .' </p>
                </div>

                <div class="tipo_gestion d-flex align-items-center">
                    <p class="mr-2"> ' . $api['Gestion'] . ' </p>
                </div>

            </div>
            
            <div style="height:220px" class="contenido col-12 col-md-6 col-lg-8 col-xl-8">

                <div class="d-flex pl-3 align-items-baseline">
                    <i class="mr-1 fas fa-map-marker-alt"></i>
                    <h4> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </h4>
                </div>

                <div class="ml-3 d-flex">
                    <p class="mr-5"> $';
                    if ($api['Gestion'] == 'Arriendo') {
                        echo $api['Canon'];
                    } else if ($api['Gestion'] == 'Venta') {
                        echo $api['Venta'];
                    } else {
                        echo $api['Canon'] . '/ $' . $api['Venta'];
                    }
                    echo ' </p>
                    <p class="text-muted"> Código: '. $codigo .' </p>
                </div>

                <div>
                    <p> '.$descripcion.' </p>
                </div>

                <div class="fondo_caracteristicas1 d-flex align-items-center justify-content-around">

                    <div class="d-flex py-2 align-items-center">
                        <i class="blanco fas fa-chart-area"></i>
                        <p class="blanco pl-2"> ' . $api['AreaConstruida'] . 'm<sup>2 </p>
                    </div>

                    <div class="d-flex py-2 align-items-center">
                        <i class="blanco fas fa-bath"></i>
                        <p class="blanco pl-2"> ' . $api['banios'] . ' </p>
                    </div>

                    <div class="d-flex py-2 align-items-center">
                        <i class="blanco fas fa-bed"></i>
                        <p class="blanco pl-2"> ' . $api['Alcobas'] . ' </p>
                    </div>

                    <div class="d-flex py-2 align-items-center">
                        <i class="blanco fas fa-warehouse"></i>
                        <p class="blanco pl-2"> ' . $api['garaje'] . ' </p>
                    </div>

                </div>

                
                <div class="fondo_caracteristicas2"></div>
                

                
                <div class="fondo_caracteristicas3"></div>
                


            </div>
            

        </a>
    </div>
 ';
    }
}

//similares
function modelo_inmueble_similare($r)
{

    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("986-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '

        <div class="p-0 col-md-6 col-xl-12 col-lg-12 py-3">

        <div class="d-flex align-items-center caja_direccion">
            <i class="mx-2 fas fa-map-marker-alt"></i>
            <p>' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </p>
        </div>
        <div style="height:200px;" class="carta mb-5 ">
            <a href="./detalle_inmueble.php?co=' . $codigo . '" class="d-flex flex-wrap" id="inmuebles2">

                <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->
                <div class="card2 col-12 p-0 position-relative">

                    <div class="imagen w-100 h-100">
                        <img src="' . $imagen . '" class="card-img-top" alt="...">
                    </div>

                    <div class="caja_negra"> </div>

                    <div class="tipo_inmueble d-flex align-items-center">
                        <p class="ml-2">' . $api['Tipo_Inmueble'] . ' </p>
                    </div>

                    <div class="tipo_gestion d-flex align-items-center">
                        <p class="mr-2"> ' . $api['Gestion'] . '</p>
                    </div>

                </div>
                <!-- IMAGEN, GESTION Y TIPO DE INMUEBLE -->

                <!-- DESCRIPCIÓN DE INMUEBLE -->
                <div style="height:40px" class="contenido col-12 d-flex flex-column">


                    <!-- ICONOS -->
                    <div class="fondo_caracteristicas1 d-flex align-items-center justify-content-around">

                        <div class="d-flex py-2 align-items-center">
                            <i class="blanco fas fa-chart-area"></i>
                            <p class="blanco pl-2">' . $api['AreaConstruida'] . 'm<sup>2</sup> </p>
                        </div>

                        <div class="d-flex py-2 align-items-center">
                            <i class="blanco fas fa-bath"></i>
                            <p class="blanco pl-2"> ' . $api['banios'] . '</p>
                        </div>

                        <div class="d-flex py-2 align-items-center">
                            <i class="blanco fas fa-bed"></i>
                            <p class="blanco pl-2"> ' . $api['Alcobas'] . ' </p>
                        </div>

                        <div class="d-flex py-2 align-items-center">
                            <i class="blanco fas fa-warehouse"></i>
                            <p class="blanco pl-2"> ' . $api['garaje'] . ' </p>
                        </div>

                    </div>
                    <div class="fondo_caracteristicas2"></div>
                    <div class="fondo_caracteristicas3"></div>



                </div>


            </a>
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
