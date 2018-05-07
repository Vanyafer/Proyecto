<?php 
include "Conexion.php";
session_start();
$id_usuario1 = $_SESSION['id_usuario'];
$id_usuario2 = $_GET['id_usuario'];
$consulta = mysqli_query($conexion,"SELECT * FROM amigos where id_usuario1 = $id_usuario1 and id_usuario2 = $id_usuario2");
if(mysqli_num_rows($consulta)==1){
	$result=mysqli_fetch_array($consulta);
	mysqli_query($conexion,"DELETE FROM amigos where id_usuario1 = $id_usuario1  and id_usuario2 = $id_usuario2");


}else{
	
	mysqli_query($conexion,"INSERT into amigos VALUES(NULL,0,$id_usuario1,$id_usuario2)");
}

header("Location: Perfiles.php?id_usuario=$id_usuario2");
?>