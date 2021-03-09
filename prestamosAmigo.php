<?php
session_start();
extract($_GET);

include 'conexion.php';
include 'consulta.php';

$usuario=$_SESSION["usuario"];
$patente=$_SESSION["patente"];
$saldo=$_SESSION["saldo"];

$fecha=getdate();
$hora=$fecha["hours"];
$mes=$fecha["mon"];
$minutos=$fecha["minutes"];

$hoy = date("y-m-d"); 

try
{
	$result=consultar(Conexion::getConexion(),"SELECT count(*) as total from prestamo where p_patente='$patente' AND p_mes='$mes'");
	$data=mysqli_fetch_assoc($result);

	if($data['total'] == 0)
	{

		if($saldo < 10)
		{

			$saldo=$saldo+20;

			$consut=consultar(Conexion::getConexion(),"UPDATE usuario SET u_saldo='$saldo' WHERE u_patente='$patente'");

			$consut=consultar(Conexion::getConexion(),"INSERT INTO prestamo VALUES ('$usuario', '$patente', 'NP','$hoy',NULL,'$mes')");

			$url="./index.html";
			echo "<SCRIPT>alert('Se te acreditaron $20 que seran debitado de tu proxima carga');window.location='$url';</SCRIPT>";

		}
		else
		{
			echo "<script language='javascript'> alert('Usted no posee el saldo minimo para adquirir el Prestamos Amigo '); window.location.assign('./saldoUsuario.php') </script>";
		}	

	}
	else
	{
		echo "<script language='javascript'> alert('Usted ya posee el Prestamos Amigo por este mes '); window.location.assign('./saldoUsuario.php') </script>";
	}
	

	
}
catch(Exception $error)
{
	echo "<script language='javascript'> alert('Fallo la cancelacion'); window.location.assign('./saldoUsuario.php') </script>";	
}




?>