<?php
session_start(); 
	extract($_GET);

		//extract($_POST);
	include 'conexion.php';
	include 'consulta.php';
	

	$reporte=$_POST['reporte'];
	$administrador= $_SESSION["usuarioAdm"];
	$patente= $_SESSION["patente"];
	$hoy = date("y-m-d");
	$fechaAux=getdate();
	$hora=$fechaAux['hours'];


	try
	{
		$consut=consultar(Conexion::getConexion(),"INSERT INTO reporte VALUES ('$patente', '$administrador', '$hoy','$reporte', '$hora', NULL)");
		
		if($consut != false)
		{
			$url="inspector.php";
			echo "<SCRIPT>alert('Reporte Creado Correctamente');window.location='$url';</SCRIPT>";
		}
		else{
			echo "<script language='javascript'> alert('Reporte no se pudo cargar, intente nuevamente'); window.location.assign('./inspectorPatente.html') </script>";
		}
	}
	catch(Exception $error)
	{
		echo "Fallo";
	}

	
	?>

