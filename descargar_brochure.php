<?php
session_start(); // Inicia la sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    $para = "ventas@qabuboutiqueliving.com";  

    // Asunto del correo
    $asunto = "Nueva descarga de brochure";

    // Cuerpo del correo
    $cuerpo = "Nombre: $name\n";
    $cuerpo .= "Apellido: $lastname\n";
    $cuerpo .= "Correo electrónico: $email\n";
    $cuerpo .= "Teléfono: $phone\n";

    // Cabecera del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviamos el correo
    if (mail($para, $asunto, $cuerpo, $headers)) {
        // Creamos una variable de sesión para permitir acceso a la página de gracias
        $_SESSION['mensaje_enviado'] = true;
        header("Location: descarga-brochure.php");
        exit();
    } else {
        echo "Hubo un error al enviar el mensaje";
    }
} else {
    echo "Acceso no permitido.";
}
?>
