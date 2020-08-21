<?php
if ($msestadoinmueble ==! '') {
    $msestadoinmueble = $_POST['mensaje_estado_inmueble'];
} else {
    $msestadoinmueble =  "No Especificado";
}

if ($codigofincaR ==! '') {
    $codigofincaR = $_POST['codigofincaR'];
} else {
    $codigofincaR =  "No Especificado";
}

if ($Nhabitaciones ==! '') {
    $Nhabitaciones = $_POST['numerohabitaciones'];
} else {
    $Nhabitaciones =  "No Especificado";
}

if ($Nban ==! '') {
    $Nban = $_POST['numeroban'];
} else {
    $Nban =  "No Especificado";
}

if ($Npiso ==! '') {
    $Npiso = $_POST['numpisos'];
} else {
    $Npiso =  "No Especificado";
}

if ($antiinmu ==! '') {
    $antiinmu = $_POST['Antiguedadinm'];
} else {
    $antiinmu =  "No Especificado";
}

if ($urlvideo ==! '') {
    $urlvideo = $_POST['url_video'];
} else {
    $urlvideo =  "No Especificado";
}
// echo $msestadoinmueble.'<br>'.$codigofincaR.'<br>'.$Nhabitaciones.'<br>'.$colores.'<br>'.$Nban.'<br>'.$Npiso.'<br>'.$antiinmu;
// echo $msestadoinmueble;
// die();


if ($precioArriendo ==! '') {
    $precioArriendo = $_POST['valorArriendo'];
} else {
    $precioArriendo =  "No Especificado";
}

if ($precioVenta ==! '') {
    $precioVenta = $_POST['ValorVenta'];
} else {
    $precioVenta =  " No Especificado";
}

// if ($direccion ==! '') {
//     $direccion = $_POST['Direccion'];
// } else {
//     $direccion =  " No Especificado";
// }

if ($precioArriendoUSD ==! '') {
    $precioArriendoUSD = $_POST['valorArriendoUSD'];
} else {
    $precioArriendoUSD =  " No Especificado";
}

if ($precioVentaUSD ==! '') {
    $precioVentaUSD = $_POST['ValorVentaUSD'];
} else {
    $precioVentaUSD =  " No Especificado";
}

// if ($area ==! '') {
//     $area = $_POST['area'];
// } else {
//    $area =  " No Especificado";
// }

// echo $tipoInmueble .'<br>'.$departamento.'<br>'.$tiposervi.'<br>'.$municipio.'<br>'.$precioArriendo.'<br>'.$barrio.'<br>'.$precioVenta
// .'<br>'.$direccion.'<br>'.$precioArriendoUSD.'<br>'.$precioVentaUSD.'<br>'.$estrato.'<br>'.$area;

// die();


// if ($mensaje ==! '') {
//      $mensaje = $_POST['Mensaje_ob'];
// } else {
//     $mensaje =  " No Especificado";
// }


if (isset($_POST['option1'])) {
    $op = $_POST['option1'];
} else {
    $op =  "No Aplica";
}

if (isset($_POST['option2'])) {
    $op2 = $_POST['option2'];
} else {
    $op2 = "No Aplica";
}
if (isset($_POST['option3'])) {
    $op3 = $_POST['option3'];
} else {
    $op3 = "No Aplica";
}
if (isset($_POST['option4'])) {
    $op4 = $_POST['option4'];
} else {
    $op4 = "No Aplica";
}
if (isset($_POST['option5'])) {
    $op5 = $_POST['option5'];
} else {
    $op5 = "No Aplica";
}
if (isset($_POST['option6'])) {
    $op6 = $_POST['option6'];
} else {
    $op6 = "No Aplica";
}
if (isset($_POST['option7'])) {
    $op7 = $_POST['option7'];
} else {
    $op7 = "No Aplica";
}
if (isset($_POST['option8'])) {
    $op8 = $_POST['option8'];
} else {
    $op8 = "No Aplica";
}
if (isset($_POST['option9'])) {
    $op9 = $_POST['option9'];
} else {
    $op9 = "No Aplica";
}
if (isset($_POST['option10'])) {
    $op10 = $_POST['option10'];
} else {
    $op10 = "No Aplica";
}
if (isset($_POST['option11'])) {
    $op11 = $_POST['option11'];
} else {
    $op11 = "No Aplica";
}
if (isset($_POST['option12'])) {
    $op12 = $_POST['option12'];
} else {
    $op12 = "No Aplica";
}
if (isset($_POST['option13'])) {
    $op13 = $_POST['option13'];
} else {
    $op13 = "No Aplica";
}
if (isset($_POST['option14'])) {
    $op14 = $_POST['option14'];
} else {
    $op14 = "No Aplica";
}
if (isset($_POST['option15'])) {
    $op15 = $_POST['option15'];
} else {
    $op15 = "No Aplica";
}
if (isset($_POST['option16'])) {
    $op16 = $_POST['option16'];
} else {
    $op16 = "No Aplica";
}
if (isset($_POST['option17'])) {
    $op17 = $_POST['option17'];
} else {
    $op17 = "No Aplica";
}
if (isset($_POST['option18'])) {
    $op18 = $_POST['option18'];
} else {
    $op18 = "No Aplica";
}
if (isset($_POST['option19'])) {
    $op19 = $_POST['option19'];
} else {
    $op19 = "No Aplica";
}
if (isset($_POST['option20'])) {
    $op20 = $_POST['option20'];
} else {
    $op20 = "No Aplica";
}
if (isset($_POST['option21'])) {
    $op21 = $_POST['option21'];
} else {
    $op21 = "No Aplica";
}

if (isset($_POST['copia'])) {
    $copi = $_POST['Correo'];;
} else {
    $copi = 'wdsp9898@gmail.com';
}

// echo $nom . '<br>' . $co . ' <br>' . $le  . ' <br>';
// echo   $op . '<br>' . $op2 . '<br>' . $op3 . '<br>' . $op4 . '<br>' . $op5. '<br>' . $op6. '<br>' . $op7. '<br>' . $op8. '<br>' . $op9. '<br>' . $op10
// . '<br>' . $op11. '<br>' . $op12. '<br>' . $op13. '<br>' . $op14. '<br>' . $op15. '<br>' . $op16. '<br>' . $op17. '<br>' . $op18. '<br>' . $op19
// . '<br>' . $op20. '<br>' . $op21. '<br>' .$copi;

// die();
