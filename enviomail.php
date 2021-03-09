	<?php
	include 'conexion.php';
	include 'consulta.php';
	extract($_POST);
	extract($_GET);
	if(isset($_POST['email'])) 
	{

			// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
		$email_to = "imperiale.juanpi@gmail.com";
		$email_subject = "Contacto desde SL Parking";

			// Aquí se deberían validar los datos ingresados por el usuario
		if(!isset($_POST['nombre']) ||
			!isset($_POST['email']) ||
			!isset($_POST['telefono']) ||
			!isset($_POST['direccion']) ||
			!isset($_POST['mensaje'])) 
		{

			echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
			echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
			die();
		}

		$email_message = "Detalles del formulario de contacto:\n\n";
		$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
		$email_message .= "E-mail: " . $_POST['email'] . "\n";
		$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
		$email_message .= "Dirección: " . $_POST['direccion'] . "\n";
		$email_message .= "Comentarios: " . $_POST['mensaje'] . "\n\n";
		


			// Ahora se envía el e-mail usando la función mail() de PHP

		mail($email_to, $email_subject, $email_message);
	}
	$consut=consultar(Conexion::getConexion(),"INSERT INTO email VALUES ('$nombre', '$email', '$telefono', '$direccion', '$mensaje',NULL)");
	
	if($consut != false)
	{
		$url="./index.html";
		echo "<SCRIPT>alert('El mail se envio Correctamente');window.location='$url';</SCRIPT>";
	}
	else{
		echo "<script language='javascript'> alert('El Correo no se pudo enviar, Reitente'); window.location.assign('./contacts.html') </script>";
	}
	?>


	