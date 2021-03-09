<?php
session_start();	
	extract($_GET);
	
	$hoy = date("y-m-d"); 
	$fechaAux=getdate();
	$hora=$fechaAux['hours'];



		//extract($_POST);
	$patente=$_POST['patente'];

		//$contrasena=$_POST['contrasena'];
	

	require('conexion2.php');
	$query2="SELECT * FROM ticket,usuario where u_patente=t_patente AND t_patente='$patente' AND t_numeo = (SELECT MAX(t_numeo) FROM ticket WHERE t_patente='$patente' AND t_fecha = '$hoy')";
	$resultado=$mysqli->query($query2);

	while($row=$resultado->fetch_assoc()){ 

		$patente=$row['t_patente'];
		$saldo=$row['u_saldo'];
		$usuario=$row['t_usuario'];
		$fechaTicket =$row['t_fecha'];
		$zonaTicket =$row['t_zona'];
		$horaInicioTicket =$row['t_horaInicio'];
		$horaFinTicket =$row['t_horaFin'];
		$minutocreacion =$row['t_minuto'];
		$horacreacion =$row['t_hora'];
	}
	if ($horaInicioTicket<=$hora && $hora<=$horaFinTicket)	{		
		$_SESSION["usuario"]=$usuario;
		$_SESSION["patente"]=$patente;
		$_SESSION["saldo"]=$saldo;
		$_SESSION["fecha"]=$fechaTicket;
		$_SESSION["zona"]=$zonaTicket;
		$_SESSION["horaInicio"]=$horaInicioTicket;
		$_SESSION["horaFin"]=$horaFinTicket;
		$_SESSION["minutocreacion"]=$minutocreacion;
		$_SESSION["horacreacion"]=$horacreacion;
		
		
		$url="comprobadoTicketAdministrador.php";
		echo "<SCRIPT>alert('Ticket Vigente del usuario ');window.location='$url';</SCRIPT>";
	}
	else {
		$url="inspector.php";
		echo "<SCRIPT>alert('El usuario NO cuenta con un Ticket vigente');window.location='$url';</SCRIPT>";

	}
	
	?>
