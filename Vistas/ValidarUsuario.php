<?php
include("conexion.php");
$Usuario=$_POST['Usuario'];
echo $Usuario;
	$consulta=mysqli_query($conexion,"SELECT * FROM usuario WHERE nombre_usuario='$Usuario'");
		if(mysqli_num_rows($consulta)==1){
			echo "0";
		}else{
			echo "1";
		}
?>