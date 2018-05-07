<?php 
include "Conexion.php";
session_start();
$id_usuario1 = $_SESSION['id_usuario'];
$id = $_GET['id'];
$consultaAmigos = mysqli_query($conexion,"SELECT * FROM amigos where id_amigos = $id ");
$result = mysqli_fetch_array($consultaAmigos);
	if($result['estado']==0){
		mysqli_query($conexion,"UPDATE amigos set estado = 1 where id_amigos = $id");
	}else{
		mysqli_query($conexion,"DELETE FROM amigos where id_amigos = $id");
	}


header("Location: Perfiles.php?id_usuario=$id_usuario1");
?>