<?php 
		$servidor="localhost";
		$usuario="root";
		$contra="";
		$BD="Proyecto";
	$conexion = @mysqli_connect($sevirdor,$usuario,$contra);
	if(!$conexion){
		die('<strong>Error en la conexion</strong>'.mysqli_error());
	}
	mysqli_select_db($conexion, $BD)or die(mysqli_error($conexion));
	
 ?>