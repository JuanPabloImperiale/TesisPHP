<?php
session_start();
	extract($_GET);

	include 'conexion.php';
	include 'consulta.php';

	$usuario=$_SESSION["usuario"];
	$patente=$_SESSION["patente"];
	$saldo=$_SESSION["saldo"];
	$fechaTicket=$_SESSION["fecha"];
	$zonaTicket=$_SESSION["zona"];
	$horaInicioTicket=$_SESSION["horaInicio"];
	$horaFinTicket=$_SESSION["horaFin"];
	$horaFinTicket=$_SESSION["horacreacion"];
	$horaFinTicket=$_SESSION["minutocreacion"];

	$id=$_SESSION["id"];
        $fecha=getdate();
	$hora=$fecha["hours"];
	$minutos=$fecha["minutes"];
	$horaFinTicket= $horaFinTicket +1;

	try
	{

		if(($horacreacion=$hora) && (($minutos - $minutocreacion)<10))
		{
			$consut=consultar(Conexion::getConexion(),"DELETE FROM ticket WHERE t_numeo='$id'");
			if($consut != false)
			{	
				$saldo=$saldo+10;
				$consut=consultar(Conexion::getConexion(),"UPDATE usuario SET u_saldo='$saldo' WHERE u_patente='$patente'");
				$url="./index.html";
				echo "<SCRIPT>alert('Ticket Eliminado correctamente');window.location='$url';</SCRIPT>";
			}
			else
			{
				echo "<script language='javascript'> alert('Fallo la Cancelacion del ticket'); window.location.assign('./ComprobadoTicketFinal.php') </script>";
			}
		}
		else
		{
			echo "<script language='javascript'> alert('No puede cancelar el Ticket una vez pasado los 10 minutos'); window.location.assign('./index.html') </script>";
		}	

		
	}
	catch(Exception $error)
	{
		echo "<script language='javascript'> alert('Fallo la cancelacion'); window.location.assign('./ComprobadoTicketFinal.php') </script>";	
	}

	
	?>
	
	?>