<?php 

//VARIABLES
$nombres=$_POST['nombres'];

$calle=$_POST['calle'];

$usuario=$_POST['usuario'];

$zapasfila=$_POST['zapasfila'];

$edad=$_POST['edad'];

$comen=$_POST['comen'];


// DATOS DEL ENVÍO
$destinatario="mimail@hotmail.com";
$asunto="Nuevo postulante";


// CUERPO DEL EMAIL
$cuerpo.="Nombre Completo: ".$nombres."\n";

$cuerpo.="Domicilio: ".$calle."\n";

$cuerpo.="Usuario: ".$usuario."\n";

$cuerpo.="Modelo de Zapatillas: ".$zapasfila."\n";

$cuerpo.="Edad: ".$edad."\n\n";

$cuerpo.="Comentario: ".$comen."\n";


// ENVÍO SATISFACTORIO y LEYENDA
mail($destinatario,$asunto,$cuerpo);

echo $nombres, ", gracias por postularte, pronto nos vamos a contactar!!!";	

?>
