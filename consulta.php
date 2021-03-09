<?php

function consultar($conexion, $query){
	try{
		$resultado = mysqli_query($conexion, $query);
		return $resultado;
	}
	catch (Exception $error) {
		echo "Error en consulta\n";
	}
}

?>