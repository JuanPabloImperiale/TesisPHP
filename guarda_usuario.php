	<?php 
	extract($_GET);
		//extract($_POST);
	include 'conexion.php';
	include 'consulta.php';


	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$patente=$_POST['patente'];
	$numeroChasis=$_POST['numeroChasis'];
	$usuario=$_POST['usuario'];
	$contrasena=$_POST['contrasena'];
	$contrasenacodificada=crypt($_POST["contrasena"], "pw");
	try
	{
		$result=consultar(Conexion::getConexion(),"SELECT count(*) as total from usuario where u_usuario='$usuario'");
		$data=mysqli_fetch_assoc($result);
		
		if($data['total'] == 0){
			$consut=consultar(Conexion::getConexion(),"INSERT INTO usuario VALUES ('$nombre', '$apellido', '$patente', '$numeroChasis', '$usuario', '$contrasenacodificada','0')");

			if($consut != false)
			{
				$url="./index.html";
				echo "<SCRIPT>alert('Usuario Creado Correctamente');window.location='$url';</SCRIPT>";
			}
			else{
				echo "<script language='javascript'> alert('La Patente ya $patente tiene asosiada una cuenta'); window.location.assign('./CrearUsuario.html') </script>";
			}

		}
		else {
			echo "<script language='javascript'> alert('El usuario ya $usuario existe $unico, intente con otro'); window.location.assign('./CrearUsuario.html') </script>";

		}
		
	}
	catch(Exception $error)
	{
		echo "No se pudo cargar el perfil correctamente";
	}


	?>

