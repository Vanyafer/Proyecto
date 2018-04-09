<?php
include("conexion.php");

session_start();
if(!isset($_SESSION['Correo']))header("Location: index.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/Inicio.css">
	<script type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>		
<?php include "BarraNavegacion.php"; ?>

</body>
</html>
<?php

			if($_SESSION['tipo_usuario'] == 1){
				echo "<script Language='JavaScript'>document.getElementById('Publicar').style.visibility='visible';</script>";
			}
			if($_SESSION['tipo_usuario'] == 2){
				echo "<script Language='JavaScript'>document.getElementById('Publicar').style.display='none';</script>";
			}
	?>