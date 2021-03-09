function validar()
{
	var patente = document.getElementById('patente').value;

	switch("")
	{
		case(patente):
		{
			alert("Falta completar el campo: Patente");
			return false;
		
    	}

		default:
		{
			
			document.getElementById("formularioPatente").submit();
		}



	}
}