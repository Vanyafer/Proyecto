<?php
include("conexion.php");
$Correo=$_POST['Correo'];
	$consulta=mysqli_query($conexion,"SELECT * FROM usuario WHERE correo='$Correo'");
		if(mysqli_num_rows($consulta)==1){
			echo "0";
		}else{
			echo "1";
		}
?>