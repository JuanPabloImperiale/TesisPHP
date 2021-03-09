<?php
session_start();
	
	extract($_GET);
		//extract($_POST);
	$usuario=$_POST['usuario'];
		//$contrasena=$_POST['contrasena'];
	
	$contrasenacodificada=crypt($_POST["contrasena"], "pw");
	
	$auth = false;
	
	require('conexion2.php');
	
	$query="SELECT * FROM usuario WHERE u_usuario='$usuario'";
	
	$resultado=$mysqli->query($query);
	while($row=$resultado->fetch_assoc()){ 
		
		$usuario2=$row['u_usuario'];
		$password2=$row['u_password'];
		$patente=$row['u_patente'];
		$saldo=$row['u_saldo'];
			
		
	}
	if (($usuario == $usuario2) &&  ($contrasenacodificada == $password2))
	{
		$auth = true;
		
		
		$_SESSION["usuario"]=$usuario;
		$_SESSION["patente"]=$patente;
		$_SESSION["saldo"]=$saldo;
		
		$url="./saldoUsuario.php";
		echo "<SCRIPT>alert('Sesion Iniciada Correctamente');window.location='$url';</SCRIPT>";
	}
	else
	{

		echo '<script language="javascript">
		alert("Nombre de usuario o contraseña incorrecto, vuelva a intentar");
		document.location=("./usuarioSaldo.html")
		</script>';
	}
	
	?>
