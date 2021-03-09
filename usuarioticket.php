<?php
session_start();
	
	extract($_GET);
	
	$hoy = date("y-m-d"); 
	$fechaAux=getdate();
	$hora=$fechaAux['hours'];
	$usuario=$_POST['usuario'];
	$contrasenacodificada=crypt($_POST["contrasena"], "pw");
	
	$auth = false;
	
	require('conexion2.php');
	
	$query1="SELECT * FROM usuario WHERE u_usuario='$usuario'";
	
	$resultado=$mysqli->query($query1);
	while($row=$resultado->fetch_assoc()){ 
		
		$usuario2=$row['u_usuario'];
		$patente=$row['u_patente'];
        $password2=$row['u_password'];	

	// traigo los datos del la persona que inicia sesion 

		
	}
			if (($usuario == $usuario2) &&  ($contrasenacodificada == $password2)) // estoy comprobando que la secion sea correcta
			{
				$auth = true;

				echo "<SCRIPT>alert('Sesion Iniciada Correctamente');</SCRIPT>";

				require('conexion2.php');
                                $query2="SELECT * FROM ticket,usuario where u_patente=t_patente AND t_numeo = (SELECT MAX(t_numeo) FROM usuario,ticket WHERE t_patente=u_patente AND u_patente='$patente' AND t_patente='$patente' AND t_fecha = '$hoy')";
				$resultado=$mysqli->query($query2);

				while($row=$resultado->fetch_assoc()){ 

					$patente=$row['u_patente'];	

					$saldo=$row['u_saldo'];

					$fechaTicket =$row['t_fecha'];
					$zonaTicket =$row['t_zona'];
					$horaInicioTicket =$row['t_horaInicio'];
					$horaFinTicket =$row['t_horaFin'];
					$id =$row['t_numeo'];
					$minutocreacion =$row['t_minuto'];
					$horacreacion =$row['t_hora'];
				}
				if ($horaInicioTicket<=$hora && $hora<$horaFinTicket)	{		
					$_SESSION["usuario"]=$usuario;
					$_SESSION["patente"]=$patente;
					$_SESSION["saldo"]=$saldo;
					$_SESSION["fecha"]=$fechaTicket;
					$_SESSION["zona"]=$zonaTicket;
					$_SESSION["horaInicio"]=$horaInicioTicket;
					$_SESSION["horaFin"]=$horaFinTicket;
					$_SESSION["id"]=$id;
					$_SESSION["minutocreacion"]=$minutocreacion;
					$_SESSION["horacreacion"]=$horacreacion;
					
					
					$url="ComprobadoTicketFinal.php";
					echo "<SCRIPT>alert('Usted cuenta con un Ticket Vigente en este momento ');window.location='$url';</SCRIPT>";
				}
				else {
					$url="./index.html";
					echo "<SCRIPT>alert('Usted NO cuenta con un Ticket Generado vigente en este momento ');window.location='$url';</SCRIPT>";

				}
			}
			else
			{

				echo '<script language="javascript">
				alert("Nombre de usuario o password incorrecto, vuelva a intentar");
				document.location=("./usuarioTicket.html")
				</script>';
			}
			
			?>
