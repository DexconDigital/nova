<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function activasoli()
{
if ($_POST) {
    // Primera seccion
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $email = $_POST['Correo'];
    $telefono = $_POST['Telefono'];
    // $mensaje = $_POST['Mensaje_ob'];
    // segunda seccion
    $tipoInmueble = $_POST['Tipo_Inmueble'];
    $departamento = $_POST['Alcaldia'];
    $tiposervi = $_POST['Tipo_servi'];
    $municipio = $_POST['Colonia'];
    $precioArriendo = $_POST['valorArriendo'];
    $barrio = $_POST['Letra'];
    $precioVenta = $_POST['ValorVenta'];
    // $direccion = $_POST['Direccion'];
    $precioArriendoUSD = $_POST['valorArriendoUSD'];
    $precioVentaUSD = $_POST['ValorVentaUSD'];
    // $estrato = $_POST['Estrato'];
    // $area = $_POST['area'];
    // tercera seccion
    $msestadoinmueble = $_POST['mensaje_estado_inmueble'];
    $urlvideo = $_POST['url_video'];
    $codigofincaR = $_POST['codigofincaR'];
    $Nhabitaciones = $_POST['numerohabitaciones'];
    $colores = $_POST['colores'];
    $Nban = $_POST['numeroban'];
    $Npiso = $_POST['numpisos'];
    $antiinmu = $_POST['Antiguedadinm'];
    
}

// Importante 
require '../emailvalida/solicita.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'Dexc@n2020@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    // Mensaje para enviar

    $mail->isHTML(true);
    $mail->setFrom('Nova@NovaInmobiliaria.com', 'Nova@NovaInmobiliaria.com');
    // $mail->addAddress('novainmpr@gmail.com');
    $mail->addAddress('wdsp9898@gmail.com');
    $mail->AddCC($copi,"Persona Interesada");
    
    




    $mail->Subject = 'Mensaje desde la página web Nova Inmobiliaria';
    $mail->Body = '<span>Hola, '.$nombre.' '.$apellido.' quiere solicitar un inmueble sus datos son: </span>
                    <h4>Datos Básicos:</h4>
                    <ul>
                        <li>Nombre Completo: <strong>'.$nombre.' '.$apellido.'</strong></li>
                        <li>Correo Electrónico: <strong>'.$email.'</strong></li>
                        <li>Teléfono: <strong>'.$telefono.'</strong></li>
                        
                        
                    </ul>
                    <h4>Datos Principales de Propiedad:</h4>
                    <ul>
                        <li>Tipo de Inmueble: <strong>'.$tipoInmueble.'</strong></li>
                        <li>Tipo de Servicio: <strong>'.$tiposervi.'</strong></li>
                        <li>Departamento: <strong>'.$departamento.'</strong></li>
                        <li>Municipio: <strong>'.$municipio.'</strong></li>
                        <li>Barrio: <strong>'.$barrio.'</strong></li>
                        <li>Valor de Arriendo: <strong>'.$precioArriendo.'</strong></li>
                        <li>Valor de Venta: <strong>'.$precioVenta.'</strong></li>
                        <li>Valor de Arriendo (USD): <strong>'.$precioArriendoUSD.'</strong></li>
                        <li>Valor de Venta (USD): <strong>'.$precioVentaUSD.'</strong></li>
                        
                        
                        
                    </ul>
                    <h4>Características de Propiedad:</h4>
                    <ul>
                        <li>Estado del Inmueble: <strong>'.$msestadoinmueble.'</strong></li>
                        <li>Url Video: <strong>'.$urlvideo.'</strong></li>
                        <li>Código FincaRaiz: <strong>'.$codigofincaR.'</strong></li>
                        <li>Color de pared: <strong>'.$colores.'</strong></li>
                        <li>N° Habitaciones: <strong>'.$Nhabitaciones.'</strong></li>
                        <li>N° de Baños: <strong>'.$Nban.'</strong></li>
                        <li>N° de Piso: <strong>'.$Npiso.'</strong></li>
                        <li>Antigüedad del Inmueble: <strong>'.$antiinmu.'</strong></li>
                    </ul>
                    <h4>Cuenta con:</h4>
                    <ul style="column-count:2">
                         <li>Barra estilo americano: <strong>'.$op.'</strong></li>
                         <li>Cuarto de servicio: <strong>'.$op2.'</strong> </li>
                         <li>Zona de lavandería: <strong>'.$op3.'</strong></li>
                         <li>Baño Auxiliar: <strong>'.$op4.'</strong> </li>
                         <li>Depósito/Bodega: <strong>'.$op5.'</strong></li>
                         <li>Amoblado:  <strong>'.$op6.'</strong></li>
                         <li>Cocina tipo Americano: <strong>'.$op7.'</strong></li>
                         <li>Piso en Baldosa/Mármol:  <strong>'.$op8.'</strong> </li>
                         <li>Chimenea: <strong>'.$op9.'</strong></li>
                         <li>Hall de Alcobas:  <strong>'.$op10.'</strong> </li>
                         <li>Aire Acondicionado:  <strong>'.$op11.'</strong> </li>
                         <li>Citófono: <strong>'.$op12.'</strong></li>
                         <li>Instalación de gas:  <strong>'.$op13.'</strong></li>
                         <li>Alarma: <strong>'.$op14.'</strong></li>
                         <li>Cocina Integral: <strong>'.$op15.'</strong> </li>
                         <li>Patio:  <strong>'.$op16.'</strong></li>
                         <li>Calentador: <strong>'.$op17.'</strong></li>
                         <li>Estudio:  <strong>'.$op18.'</strong></li>
                         <li>Balcón: <strong>'.$op19.'</strong></li>
                         <li>Comedor auxiliar:  <strong>'.$op20.'</strong></li>
                         <li>Sauna / Turco / Jacuzzi: <strong>'.$op21.'</strong></li>
                    </ul>
                  ';
    $mail->send();
    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias.');
    window.location.href='../solicitar_inmueble.php'
         </script>";
} catch (Exception $e) {

    echo 'algo salio mal', $e->getMessage();
}
}

require '../app/initsolicita.php';
