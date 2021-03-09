function ticket()
{
	var inicio= document.getElementById("horaInicio").value;
	var fin= document.getElementById("horaFin").value;
	var zona = document.getElementById('zona').value;
	var patente = document.getElementById('patente').value;
	switch("")
	{
		case(zona):
		{
			alert("Falta completar el campo: Zona");
			return false;
		
    	}
    	case(patente):
		{
			alert("Falta completar el campo: Patente");
			return false;
		
    	}
		
	}
	if(inicio >= fin)
	{
		alert("La Hora de Final debe ser mayor a: " + inicio + "hs ");
		return false;

	}
	else
	{	
		if((inicio>24)) // control de horario de atencion 
		{ 
			alert("En este horario no es necesario genera Ticket");
			return false;

		}
		else{
		
			confirmar=confirm("Se cargara su nuevo Ticket! desde:"+inicio+"hs hastas:"+fin+ "hs" );
			if (confirmar) {
			
			document.getElementById("nuevoticket").submit();
			}
			else{ 
				return false;

			}
		} 
			
	}

			
}