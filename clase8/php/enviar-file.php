<?php 
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Destinatario del correo
    $to = 'albadebiase@gmail.com'; //¡Modificar!
    
    // Asunto del correo
    $subject = 'Solicitud de empleo'; //¡Modificar!
    
    // Variables del formulario - ¡Modificar!
    $nombrecompleto = $_POST['nombrecompleto'];
    $calle = $_POST['calle'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    
    // Archivo adjunto - ¡Modificar!
    $file_tmp_name = $_FILES['cv']['tmp_name'];
    $file_name = $_FILES['cv']['name'];
    
    // Contenido del archivo adjunto
    $file_content = file_get_contents($file_tmp_name);
    $file_content_encoded = chunk_split(base64_encode($file_content));
    
    // Construir el cuerpo del correo con HTML - ¡Modificar!
    $cuerpo = "<html><body>";
    $cuerpo .= "<p style='margin: 0;'>Nombre Completo: " . $nombres . "</p>";
    $cuerpo .= "<p style='margin: 0;'>E-mail: " . $correo . "</p>";
    $cuerpo .= "<p style='margin: 0;'>Edad: " . $edad . "</p>";
    $cuerpo .= "<p style='margin: 0;'>Documento: " . $doc . "</p>";
    $cuerpo .= "<p style='margin: 0;'>Fecha de nacimiento: " . $nac . "</p><br>";
    $cuerpo .= "<p style='margin: 0;'>Comentario: " . $mensaje . "</p>";
    $cuerpo .= "</body></html>";
    
    // Cabeceras del correo
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"boundary\"\r\n";
    
    // Contenido del correo
    $content = "--boundary\r\n";
    $content .= "Content-Type: text/html; charset=UTF-8\r\n";
    $content .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $content .= $cuerpo . "\r\n";
    $content .= "--boundary\r\n";
    $content .= "Content-Type: application/octet-stream; name=\"$file_name\"\r\n";
    $content .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
    $content .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $content .= $file_content_encoded . "\r\n";
    $content .= "--boundary--\r\n";
    
    // Enviar el correo
    $mail_sent = mail($to, $subject, $content, $headers);
    
    // Verificar si el correo se envió correctamente - ¡Modificar!
    if ($mail_sent) {
        echo "<strong>". $nombres ."</strong>, te postulaste con éxito, gracias!!!";
    } else {
        echo "¡Hubo un problema al enviar el formulario!";
    }
}

?>
