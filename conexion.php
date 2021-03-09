<?php

$instanciaConexion = Conexion::getConexion();

class Conexion{
	private static $con;
	private static $numInstancias = 0;
	
	private function __construct(){
	}
	
	public static function getConexion(){
		if (Conexion::$numInstancias == 0){
			Conexion::$con = mysqli_connect("localhost","root","") or die ("No se realizo la conexion");
			mysqli_select_db(Conexion::$con,"slparking") or die ("ERROR al conectar base de dato");

			return Conexion::$con;
		}else{
			return Conexion::$con;
		}
	}
	
}

?>