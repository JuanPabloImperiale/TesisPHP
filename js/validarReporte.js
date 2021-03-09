function ValidarReporte()
{

	var men = document.getElementById('reporte').value;
	switch("")
	{
		case(men):
		{
			alert("Falta completar el campo: Reporte");
			return false;
		
		}
		default:
		{
		    	alert("Su Reporte sera cargado" );

				document.getElementById("formularioReporte").submit();

		    
			
		}
	}

}


