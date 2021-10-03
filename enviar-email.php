<?php
if(isset($_POST['email'])){

	<bold>
	$email_to='gabriela.zamora99@hotmail.com';
	$email_subject='Nuevo pedido en Cardel Decorations';
	<bold>
	if(!isset($_POST['nombres']) ||
	!isset($_POST['apellidos']) ||
	!isset($_POST['email']) ||
	!isset($_POST['telefono']) ||
	!isset($_POST['lugar'])	||
	!isset($_POST['muni']) ||
	!isset($_POST['ingreso']) ||
	!isset($_POST['salida']) ||
	!isset($_POST['hora']) ||
	!isset($_POST['producto']) ||
	!isset($_POST['pago'])) {
		echo "<b>Ocurrió un error y el formulario no ha sido enviado </b><br/>"
		echo"Por favor, vuelva atrás y verifique la información ingresada <br />"
		die();
	}

	$email_message = "Detalles del pedido:"
	$email_message .= "Nombre: " . $_POST['nombres'] . "\n";
	$email_message .= "Apellido: " . $_POST['apellidos'] . "\n";
	$email_message .= "E-mail: " . $_POST['email'] . "\n";
	$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
	$email_message .= "Lugar de Entrega: " . $_POST['lugar'] . "\n";
	$email_message .= "Día de reserva: " . $_POST['ingreso'] . "\n";
	$email_message .= "Día de Entrega: " . $_POST['salida'] . "\n";
	$email_message .= "Hora de entrega: " . $_POST['hora'] . "\n";
	$email_message .= "Producto reservado: " . $_POST['producto'] . "\n";
	$email_message .= "Pago: " . $_POST['pago'] . "\n";		

	<bold>// Ahora se envía el e-mail usando la función mail() de PHP</bold>
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);

	echo "¡El formulario se ha enviado con éxito!";
}
?>
