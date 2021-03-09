function Validarmail()
{
	var nomb = document.getElementById('nombre').value;
	var email = document.getElementById('email').value;
	var tel = document.getElementById('telefono').value;
	var dir = document.getElementById('direccion').value;
	var men = document.getElementById('mensaje').value;
	switch("")
	{
		case(nomb):
		{
			alert("Falta completar el campo: Nombre");
			return false;
		
    	}
		case(email):
		{   
			alert("Falta completar el campo: Email");
			return false;
		
		}
		case(tel):
		{
			alert("Falta completar el campo: Telefono");
			return false;
		
		}
		case(dir):
		{
			alert("Falta completar el campo: Direccion");
			return false;
		
		}
		case(men):
		{
			alert("Falta completar el campo: Mensaje");
			return false;
		
		}
		default:
		{
				if (!/^([0-9])*$/.test(tel)){
      			alert("El Telefono:  " + tel + " no es un número");
      			return false;

      			}


				var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+\.[A-Za-z0-9_.]+[A-za-z]$/;
				if (!filter.test(email)){
				alert("Error: La dirección de correo " + email + " es incorrecta.");

				theElement.focus();
				return false;}

			
		    	alert("Su correo sera Enviado, Gracias por su comunicacion" );

				document.getElementById("formularioemail").submit();

		    
			
		}
	}

}


