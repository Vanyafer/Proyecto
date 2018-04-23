<?php
	include("conexion.php");
	include "BarraNavegacion.php";
	$idhilo = $_GET['id'];
	$usuario = $_SESSION['id_usuario'];
	$consulta1 = mysqli_query($conexion,"INSERT INTO foro_favs VALUES (NULL, $usuario, $idhilo)");
	header('Location: hilo2.php?id='.$idhilo.'');
?>