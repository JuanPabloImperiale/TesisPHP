function Validar()
{
	var nomb = document.getElementById('nombre').value;
	var apel = document.getElementById('apellido').value;
	var pat = document.getElementById('patente').value;
	var nC = document.getElementById('numeroChasis').value;
	var usu = document.getElementById('usuario').value;
	var con = document.getElementById('contrasena').value;
	
	switch("")
	{
		case(nomb):
		{
			alert("Falta completar el campo: Nombre");
			return false;
		
    	}
		case(apel):
		{
			alert("Falta completar el campo: Apellido");
			return false;
		
		}
		case(pat):
		{
			alert("Falta completar el campo: Patente");
			return false;
		
		}
		case(nC):
		{
			alert("Falta completar el campo: Numero de Chasis");
			return false;
		
		}
		case(usu):
		{
			alert("Falta completar el campo: Usuario");
			return false;
		
		}
		case(con):
		{
			alert("Falta completar el campo: Contraseña");
			return false;
		
		}
		default:
		{
			
			document.getElementById("nuevousuario").submit();
		}
	}

}



