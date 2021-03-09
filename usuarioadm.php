<?php
session_start();
	
	extract($_GET);
		//extract($_POST);
	$usuario=$_POST['usuario'];
	
		//$contrasena=$_POST['contrasena'];
	
	$contrasenacodificada=crypt($_POST["contrasena"], "pw");
	
	$auth = false;
	
	require('conexion2.php');
	
	$query="SELECT * FROM administrador WHERE a_usuario='$usuario'";
	
	$resultado=$mysqli->query($query);
	while($row=$resultado->fetch_assoc()){ 
		
		$usuario2=$row['a_usuario'];
		
		$password2=$row['a_password'];	
		
	}
	if (($usuario == $usuario2) &&  ($contrasenacodificada == $password2))
	{
		$auth = true;
		

		$_SESSION["usuarioAdm"]=$usuario;
		
		$url="inspector.php";
		echo "<SCRIPT>alert('Sesion Iniciada Correctamente');window.location='$url';</SCRIPT>";
	}
	else
	{

		echo '<script language="javascript">
		alert("Nombre de usuario o contraseña incorrecto, vuelva a intentar");
		document.location=("./usuarioAdm.html")
		</script>';
	}
	
	?>
