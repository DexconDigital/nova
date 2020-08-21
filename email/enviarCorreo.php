<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require '../vendor/autoload.php';

function activeCorreo()
{

    if ($_POST) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['tel'];
        $mensaje = $_POST['mensaje'];
        

    }
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();

        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        //acceso
        $mail->CharSet = 'UTF-8';
        $mail->Username = 'masivoinmobiliarias@gmail.com';
        $mail->Password = 'Dexc@n2020@';

        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Mensaje para enviar

        $mail->isHTML(true);
        //Cabecera
        $mail->setFrom('Nova@NovaInmobiliaria.com', 'Nova@NovaInmobiliaria.com');
        //destinos

        // $mail->addAddress('wdsp9898@gmail.com');
        // $mail->addAddress('novainmpr@gmail.com');
        //  $mail->addAddress('desarrollo2@dexcondigital.com');
        // $mail->AddCC($email,"Persona Interesada");
        


        $mail->Subject = 'Mensaje desde la página web Nova Inmobiliaria';
        $mail->Body = '<span>Hola, ' . $nombre . ' quiere contactarse con ustedes.</span>
                    <h4>Datos de contacto:</h4>
                    <ul>
                        <li>Correo: ' . $email . '</li>
                        <li>Teléfono: ' . $telefono . '</li>
                        <li>Mensaje: ' . $mensaje . '</li>
                    </ul>
    ';
        $mail->send();
        echo "
    <script>alert('Mensaje enviado, muchas gracias.');window.location.href='../contactenos.php'</script>";
    } catch (Exception $e) {
        echo 'algo salio mal', $e->getMessage();
    }
}

require '../app/init.php';