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
$id=$_SESSION["id"];

$horaFinTicket= $horaFinTicket +1;
$saldo = $saldo - 10;
try
{
		//controlar la hora de cierre de cobro 
	if ($saldo >= 0)
	{
		if($horaFinTicket <23)
		{
			$consut=consultar(Conexion::getConexion(),"UPDATE ticket SET t_horaFin='$horaFinTicket' WHERE t_numeo='$id'");
			if($consut != false)
			{
				$consut=consultar(Conexion::getConexion(),"UPDATE usuario SET u_saldo='$saldo' WHERE u_patente='$patente'");
				$url="./index.html";
				echo "<SCRIPT>alert('Ticket Actualizado');window.location='$url';</SCRIPT>";
			}
			else
			{
				echo "<script language='javascript'> alert('Fallo la Actualizacion'); window.location.assign('./index.html') </script>";
			}
		}
		else
		{
			echo "<script language='javascript'> alert('Fallo la Actualizacion, hora de cierre llego al maximo'); window.location.assign('./index.html') </script>";
		}	

	}
	else {
		echo "<script language='javascript'> alert('Saldo Insuficiente'); window.location.assign('./index.html') </script>";

	}


}
catch(Exception $error)
{
	echo "<script language='javascript'> alert('Fallo la Actualizacion'); window.location.assign('./index.html') </script>";	
}     
?>