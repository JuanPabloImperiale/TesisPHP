function ValidarReporte()
{

	var men = document.getElementById('reporte').value;
	var pat = document.getElementById('patente').value;
	switch("")
	{
		case(pat):
		{   
			alert("Falta completar el campo: Patente");
			return false;
		
		}
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