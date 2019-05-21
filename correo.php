<?php 

if(isset($_POST['enviar'])){
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$mensaje = $_POST['mensaje'];

	$destinatario = "ctkrecordings@gmail.com";
	$asunto = "Contacto restaurante";

	$carta = "De: $nombre $apellido\n";
	$carta .= "Correo: $correo\n";
	$carta .= "Telefóno: $telefono\n";
	$carta .= "Mensaje: $mensaje";

	$respuesta = "";
	if(mail($destinatario, $asunto, $carta)){
		$respuesta = "Su mensaje fue enviado con éxito!";
	}else{
		$respuesta = "Su mensaje no pudo ser enviado, por favor intente más tarde";
	}
}
	
?>

