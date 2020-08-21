<?php
use ReCaptcha\ReCaptcha;

$recaptcha  = new ReCaptcha('6LcQjsAZAAAAAEy8NVJHO0z-YftGKQRRth-DB3b5');
$response = $recaptcha->verify($_POST['g-recaptcha-response']);
if ($response->isSuccess()) {

    activaconsigna();
} else {

    
    echo "<script>alert('¡Captcha Invalido! , Su mensaje no fue enviado.');window.location.href='../consignar_inmueble.php'</script>";
}

?>