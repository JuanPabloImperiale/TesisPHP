<?php
session_start(); 
extract($_GET);

	//extract($_POST);
include 'conexion.php';
include 'consulta.php';


$horaInicio=$_POST['horaInicio'];
$horaFin=$_POST['horaFin'];
$patente=$_POST["patente"];
$administrador=$_SESSION["usuarioAdm"];
$zona=$_POST["zona"];
$fecha=getdate();
$horacreacion=$fecha['hours'];
$_SESSION["horacreacion"]=$horacreacion;
$minutocreacion=$fecha["minutes"];
$_SESSION["minutocreacion"]=$minutocreacion;

$hoy = date("y-m-d"); 



	$consut=consultar(Conexion::getConexion(),"INSERT INTO ticket VALUES ('$administrador', '$patente','$zona', '$horaInicio', '$horaFin', '$hoy',NULL, $minutocreacion, $horacreacion)"); // creacion de ticket
	$costo= 10 *($horaFin - $horaInicio);
	
	if($consut != false)
	{
		$url="inspector.php"; // direccionar a la pagina con el ticket digital 
		echo "<SCRIPT> alert('Ticket Creado Correctamente, saldo a cobrar = $ $costo'); window.location='$url';</SCRIPT>";

		}
	else
	{
		echo "<script language='javascript'> alert('No se pudo cargar el Ticket, Reitente'); window.location.assign('./ticketAdministrador.php') </script>";
						
	}
?>