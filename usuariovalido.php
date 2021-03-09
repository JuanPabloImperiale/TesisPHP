<?php
session_start();

	extract($_GET);
	
	$hoy = date("y-m-d");
	$fecha=getdate();
	$hora=$fecha["hours"];
		//extract($_POST);
	$usuario=$_POST['usuario'];
		//$contrasena=$_POST['contrasena'];

	$contrasenacodificada=crypt($_POST["contrasena"], "pw");

	$auth = false;

	require('conexion2.php');

	$query1="SELECT COUNT(t_numeo) FROM `ticket`WHERE t_zona='1'AND t_horaInicio ='$hora' AND t_fecha='$hoy'";
	$query2="SELECT COUNT(t_numeo) FROM `ticket`WHERE t_zona='2'AND t_horaInicio ='$hora' AND t_fecha='$hoy'";
	$query3="SELECT COUNT(t_numeo) FROM `ticket`WHERE t_zona='3'AND t_horaInicio ='$hora' AND t_fecha='$hoy'";
	$query4="SELECT COUNT(t_numeo) FROM `ticket`WHERE t_zona='4'AND t_horaInicio ='$hora' AND t_fecha='$hoy'";
	$query5="SELECT COUNT(t_numeo) FROM `ticket`WHERE t_zona='5'AND t_horaInicio ='$hora' AND t_fecha='$hoy'";
	$query6="SELECT COUNT(t_numeo) FROM `ticket`WHERE t_zona='6'AND t_horaInicio ='$hora' AND t_fecha='$hoy'";
	$query7="SELECT COUNT(t_numeo) FROM `ticket`WHERE t_zona='7'AND t_horaInicio ='$hora' AND t_fecha='$hoy'";
	$query8="SELECT COUNT(t_numeo) FROM `ticket`WHERE t_zona='8'AND t_horaInicio ='$hora' AND t_fecha='$hoy'";
	$resultado1=$mysqli->query($query1);
	$resultado2=$mysqli->query($query2);
	$resultado3=$mysqli->query($query3);
	$resultado4=$mysqli->query($query4);
	$resultado5=$mysqli->query($query5);
	$resultado6=$mysqli->query($query6);
	$resultado7=$mysqli->query($query7);
	$resultado8=$mysqli->query($query8);
	while($row=$resultado1->fetch_assoc()){ 
		$v1=$row['COUNT(t_numeo)'];
	}
	while($row=$resultado2->fetch_assoc()){ 
		$v2=$row['COUNT(t_numeo)'];
	}
	while($row=$resultado3->fetch_assoc()){ 
		$v3=$row['COUNT(t_numeo)'];
	}
	while($row=$resultado4->fetch_assoc()){ 
		$v4=$row['COUNT(t_numeo)'];
	}
	while($row=$resultado5->fetch_assoc()){ 
		$v5=$row['COUNT(t_numeo)'];
	}
	while($row=$resultado6->fetch_assoc()){ 
		$v6=$row['COUNT(t_numeo)'];
	}
	while($row=$resultado7->fetch_assoc()){ 
		$v7=$row['COUNT(t_numeo)'];
	}
	while($row=$resultado8->fetch_assoc()){ 
		$v8=$row['COUNT(t_numeo)'];
	}
	$_SESSION["v1"]=$v1;
	$_SESSION["v2"]=$v2;
	$_SESSION["v3"]=$v3;
	$_SESSION["v4"]=$v4;
	$_SESSION["v5"]=$v5;
	$_SESSION["v6"]=$v6;
	$_SESSION["v7"]=$v7;
	$_SESSION["v8"]=$v8;


	$query="SELECT * FROM usuario WHERE u_usuario='$usuario'";

	$resultado=$mysqli->query($query);
	while($row=$resultado->fetch_assoc()){ 

		$usuario2=$row['u_usuario'];
		$patente=$row['u_patente'];	
		$password2=$row['u_password'];
		$saldo=$row['u_saldo'];		

	}
	if (($usuario == $usuario2) &&  ($contrasenacodificada == $password2))
	{
		$auth = true;

		
		$_SESSION["usuario"]=$usuario;
		$_SESSION["patente"]=$patente;
		$_SESSION["saldo"]=$saldo;

		$url="./mapa.php";
		echo "<SCRIPT>alert('Sesion Iniciada Correctamente');window.location='$url';</SCRIPT>";
	}
	else
	{

		echo '<script language="javascript">
		alert("Nombre de usuario o password incorrecto, vuelva a intentar");
		document.location=("./usuarioMapa.html")
		</script>';
	}

	?>
