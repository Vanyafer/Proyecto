<?php
	include("conexion.php");
	include "BarraNavegacion.php";
	
		$idhilo = $_GET['id'];
		$cont = $_POST['contenido'];

		$dia = date("d");
		$mes = date("m");
		$ano = date("Y");
		$fecha = $ano."-".$mes."-".$dia;

		$usuario = $_SESSION['id_usuario'];

		$consulta1 = mysqli_query($conexion,"INSERT INTO foro_respuesta VALUES (NULL, NULL, '$cont', $idhilo, $usuario)");
				
		header('Location: hilo2.php?id='.$idhilo.'');
?>

