<?php

require_once("conexion.php");

$link = Conect();
$array = array();

$sql = "SELECT * FROM noticias  where id_inmobiliaria2 = 17 order by id desc";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result)) {
    $id = $field['id'];
    $nombre = $field['nombre'];
    $descripcion = $field['descripcion'];
    $imagen = $field['imagen'];
    $archivo = $field['archivo'];
    $noticia = $field['noticia'];
    $fecha = $field['fecha'];
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => 'nova-admin/admin/' . $imagen,
        'noticia' => $noticia,
        'fecha' => $fecha,
        'archivo' => $archivo,

    );
}
function modelo_noticia($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $nombre = $r[$i]['titulo'];
        $descrip = $r[$i]['descripcion'];
        $limite_de_cadena1 = 80;
        $limite_de_cadena2 = 20;
        // recortar cadena
        //pedniente recortar cadena de descripcion corta
        if (strlen($nombre) >= $limite_de_cadena2) {
            $nombre = substr($nombre, 0, $limite_de_cadena2) . '...';
        } else {
            $nombre = $nombre . '...';
        }
        if (strlen($descrip) >= $limite_de_cadena1) {
            $descrip = substr($descrip, 0, $limite_de_cadena1) . '...';
        } else {
            $descrip = $descrip . '...';
        }
        echo '
                <div class="col-12 mb-5 ">
                        <div class="d-flex flex-row align-items-center">
            
                            <div class="col-5 imagen">
                                <img src="' . $r[$i]['imagen'] . '" class="card-img-top" alt="...">
                            </div>
            
                            <div class="col-7 d-flex flex-column justify-content-between">
            
                                <div class="py-3 caja border-bottom d-flex align-items-baseline">
                                    <i class="mx-3 azul fas fa-calendar-alt"></i>
                                    <p class="pr-3 text-muted"> ' . $r[$i]['fecha'] . ' </p>
                                </div>
            
                                <div class="caja py-3 border-bottom">
                                    <h4 class="mb-2 px-3 font-weight-bold"> ' . $nombre . ' </h4>
                                    <p class="descripcion px-3"> ' . $descrip . ' </p>
                                </div>
            
                                <div class="d-flex align-items-center justify-content-center"> <a href="detalle_noticia.php?co=' . $r[$i]['id'] . '" class="my-2 btn boton2"> Leer más </a></div>
            
            
                            </div>
            
                        </div>
                    </div>
                        
                        
                        ';
    }
}
function modelo_ultimas_noticia($r)
{
    if (count($r) > 2) {
        $cantidad_noticias = 3;
    } else {
        $cantidad_noticias = count($r);
    }

    for ($i = 0; $i < $cantidad_noticias; $i++) {
        $nombre = $r[$i]['titulo'];
        $descrip = $r[$i]['descripcion'];
        $limite_de_cadena1 = 80;
        $limite_de_cadena2 = 20;
        // recortar cadena
        //pedniente recortar cadena de descripcion corta
        if (strlen($nombre) >= $limite_de_cadena2) {
            $nombre = substr($nombre, 0, $limite_de_cadena2) . '...';
        } else {
            $nombre = $nombre . '...';
        }
        if (strlen($descrip) >= $limite_de_cadena1) {
            $descrip = substr($descrip, 0, $limite_de_cadena1) . '...';
        } else {
            $descrip = $descrip . '...<br><br>';
        }
        echo '
        <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-4 mb-md-0 mb-lg-0 mb-xl-0">
            <div class="card">

                <div class="imagen">
                    <img src="' . $r[$i]['imagen'] . '" class="card-img-top" alt="...">
                </div>

                <div class="">

                    <div class="py-3 caja border-bottom d-flex align-items-baseline">
                        <i class="mx-3 azul fas fa-calendar-alt"></i>
                        <p class="pr-3 text-muted"> ' . $r[$i]['fecha'] . ' </p>
                    </div>

                    <div class="caja py-3 border-bottom">
                        <h4 class="mb-2 px-3 font-weight-bold"> ' . $nombre . ' </h4>
                        <p class="descripcion px-3"> ' . $descrip . ' </p>
                    </div>

                    <div class="d-flex align-items-center justify-content-center"> <a href="detalle_noticia.php?co=' . $r[$i]['id'] . '" class="my-2 btn boton2"> Leer más </a></div>


                </div>

            </div>
        </div>';
    }
}
