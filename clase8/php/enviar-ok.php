<?php 

// ESTABLECE EL CUERPO DEL EMAIL COMO HTML
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//VARIABLES
$nombrecompleto=$_POST['nombrecompleto'];

$calle=$_POST['calle'];

$correo=$_POST['correo'];

$telefono=$_POST['telefono'];

$mensaje=$_POST['mensaje'];


// DATOS DEL ENVÍO
$destinatario="albadebiase@gmail.com";
$asunto="Consulta desde la Web";


// CUERPO DEL EMAIL
$cuerpo = "<html><body>";
$cuerpo .= "<p style='margin: 0;'>Nombre Completo: ". $nombrecompleto ."</p>";
$cuerpo .= "<p style='margin: 0;'>Domicilio: ". $calle ."</p>";
$cuerpo .= "<p style='margin: 0;'>Correo Electrónico: ". $correo ."</p>";
$cuerpo .= "<p style='margin: 0;'>Teléfono: ". $telefono ."</p><br>";
$cuerpo .= "<p style='margin: 0;'>Comentario: ". $mensaje  "</p>";
$cuerpo .= "</body></html>";
//$cuerpo .= "<p style='margin: 0;'><strong>Nombre Completo:</strong> ". $nombres ."</p>";


// ENVÍO SATISFACTORIO y LEYENDA
mail($destinatario,$asunto,$cuerpo,$headers);
echo "<strong>". $nombrecompleto ."</strong>, el formulario se envió con éxito, gracias!!!";

?>
