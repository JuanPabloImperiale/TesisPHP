<?php
session_start();
	include 'conexion.php';
	include 'consulta.php';

	extract($_POST);
	extract($_GET);
	$administrador = $_SESSION["usuarioAdm"];
	$latitud=$_GET['LAT'];
	$longitud=$_GET['LON'];
	$fecha=getdate();
	$hora=$fecha["hours"];
	$minutos=$fecha["minutes"];
	$hoy = date("y-m-d"); 


				// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
	$email_to = "imperiale.juanpi@gmail.com";
	$email_subject = "Alerta de emergencia SL Parking";


				// Aquí se deberían validar los datos ingresados por el usuario

	$email_message = "Detalles de la Alerta :\n\n";
	$email_message .= "--------------------------- \n";
	$email_message .= "Administrador : " . $administrador. "\n";
	$email_message .= "Posición Latitud: " . $latitud . "\n";
	$email_message .= "Posición Longitud: " . $longitud . "\n";
	$email_message .= "Fecha: " . $hoy . "\n";
	$email_message .= "hora: " . $hora .":".$minutos. "hs\n";
	$email_message .= "\nhttps://www.google.es/maps/@".$latitud.",".$longitud.",18z/data=!4m5!3m4!1s0x0:0x0!8m2!3d".$latitud."!4d".$longitud."?hl=es-AR";

	




				// Ahora se envía el e-mail usando la función mail() de PHP

	mail($email_to, $email_subject, $email_message);

	$consut=consultar(Conexion::getConexion(),"INSERT INTO alerta VALUES ('$administrador','$latitud','$longitud','$hoy','$hora','$minutos',NULL)");
	
	if($consut != false)
	{
		$url="./inspector.php";
		echo "<SCRIPT>alert('La Alerta fue enviada Correctamente');window.location='$url';</SCRIPT>";
	}
	else{
		echo "<script language='javascript'> alert('El Correo no se pudo enviar, Reitente'); window.location.assign('./inspector.php') </script>";
	}
	?>




