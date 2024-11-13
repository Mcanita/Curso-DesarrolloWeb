<?php 

// ESTABLECE EL CUERPO DEL EMAIL COMO HTML
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//VARIABLES
$nombres=$_POST['nombres'];

$correo=$_POST['correo'];

$cv=$_POST['cv'];

$edad=$_POST['edad'];

$doc=$_POST['doc'];

$nac=$_POST['nac'];

$mensaje=$_POST['mensaje'];


// DATOS DEL ENVÍO
$destinatario="argoadigital@gmail.com";
$asunto="Postulante Diseño";


// CUERPO DEL EMAIL
$cuerpo = "<html><body>";
$cuerpo .= "<p style='margin: 0;'>Nombre Completo: ". $nombres ."</p>";
$cuerpo .= "<p style='margin: 0;'>E-mail: ". $correo ."</p>";
$cuerpo .= "<p style='margin: 0;'>Curriculum Vitae: ". $cv ."</p>";
$cuerpo .= "<p style='margin: 0;'>Edad: ". $edad ."</p>";
$cuerpo .= "<p style='margin: 0;'>Documento: ". $doc  "</p>";
$cuerpo .= "<p style='margin: 0;'>Fecha de nacimiento: ". $nac  "</p><br>";
$cuerpo .= "<p style='margin: 0;'>Comentario: ". $mensaje ."</p>";
$cuerpo .= "</body></html>";
//$cuerpo .= "<p style='margin: 0;'><strong>Nombre Completo:</strong> ". $nombres ."</p>";


// ENVÍO SATISFACTORIO y LEYENDA
mail($destinatario,$asunto,$cuerpo,$headers);
echo "<strong>". $nombres ."</strong>, te postulaste con éxito, gracias!!!";

?>
