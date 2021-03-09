function ticket()
{
	var inicio= document.getElementById("horaInicio").value;
	var fin= document.getElementById("horaFin").value;

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