function validar()
{
	var usuario = document.getElementById('usuario').value;
	var pass = document.getElementById('contrasena').value;
	switch("")
	{
		case(usuario):
		{
			alert("Falta completar el campo: Usuario");
			return false;
		
    	}
		case(pass):
		{
			alert("Falta completar el campo: Contraseña");
			return false;
		
		}
		default:
		{
			
			document.getElementById("formularioUsuario").submit();
		}



	}
}