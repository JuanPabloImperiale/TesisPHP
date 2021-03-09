<?php
session_start();
extract($_GET);

	//extract($_POST);
include 'conexion.php';
include 'consulta.php';


$horaInicio=$_POST['horaInicio'];
$horaFin=$_POST['horaFin'];
$usuario=$_SESSION["usuario"];
$patente=$_SESSION["patente"];
$zona=$_SESSION["zona"];
$saldo=$_SESSION["saldo"];
$costo=$_SESSION["costo"];
$hoy = date("y-m-d"); 
$fecha=getdate();
$horacreacion=$fecha['hours'];
$_SESSION["horacreacion"]=$horacreacion;
$minutocreacion=$fecha["minutes"];
$_SESSION["minutocreacion"]=$minutocreacion;


if($costo*($horaFin-$horaInicio)>$saldo){
	echo "<script language='javascript'> alert('Saldo Insuficiente, Recargue su Cuenta!'); window.location.assign('./index.html') </script>";
}
else{
	

	try
	{
		$costo = ($_SESSION["costo"]*($horaFin-$horaInicio));
		$saldo= $_SESSION["saldo"]-($costo);

		$result=consultar(Conexion::getConexion(),"SELECT count(*) as total from ticket where t_patente='$patente' AND t_horaInicio='$horaInicio' AND t_fecha='$hoy'");
		$data=mysqli_fetch_assoc($result);

		if($data['total'] == 0)
		{
					$consut=consultar(Conexion::getConexion(),"INSERT INTO ticket VALUES ('$usuario', '$patente','$zona', '$horaInicio', '$horaFin', '$hoy',NULL,$minutocreacion,$horacreacion)"); // creacion de ticket
					
					
					if($consut != false)
					{
							$url="TicketFinal.php"; // direccionar a la pagina con el ticket digital 
							$sql= "UPDATE usuario Set u_saldo = '$saldo' WHERE (u_patente='$patente')"; //actualizacion de saldo 
							$consulta= Consultar (Conexion::getConexion(), $sql);
							
							echo "<SCRIPT> alert('Ticket Creado Correctamente'); window.location='$url';</SCRIPT>";

						}
						else{
							echo "<script language='javascript'> alert('No se pudo cargar el Ticket, Reitente'); window.location.assign('./mapa.php') </script>";
							

						}

					}
					else
					{
						echo "<script language='javascript'> alert('Este Usuario: $usuario , ya tiene registrado un ticket a la hora : $horaInicio hs'); window.location.assign('./mapa.php') </script>";
					}	
				}	
				catch(Exception $error)
				{
					echo "No se pudo cargar el perfil correctamente";
				}
				$_SESSION["costo"] = $costo;
				$_SESSION["saldo"] = $saldo;
				$_SESSION["fechaTicket"] = $hoy;
				$_SESSION["horaInicio"] = $horaInicio;
				$_SESSION["horaFin"] = $horaFin;
			}
			
			?>