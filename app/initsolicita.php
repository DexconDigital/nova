<?php
use ReCaptcha\ReCaptcha;
require_once '../variables/captcha.php';


$recaptcha  = new ReCaptcha('Secret_Key');
$response = $recaptcha->verify($_POST['g-recaptcha-response']);
if ($response->isSuccess()) {

    activasoli();
} else {

    
    echo "<script>alert('¡Captcha Invalido! , Su mensaje no fue enviado.');window.location.href='../solicitar_inmueble.php'</script>";
}

?>