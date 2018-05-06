<?php
include("conexion.php");
$contra=$_POST['contra'];
	$consulta=mysqli_query($conexion,"SELECT * FROM usuario WHERE contrasena=sha('$contra')");
		if(mysqli_num_rows($consulta)==1){
			echo "1";
		}else{
			echo "0";
		}
?>