<?php
include("conexion.php");
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
<aside class="Lateral">
	<div id="Publicar" class="Publicar"><a href="">Publicar</a></div>
	<div class="Recomendados"><p>Recomendaciones</p></div>
	<div class="Notificaciones"><p>Notificaciones</p></div>
</aside>
</body>
</html>
<?php

				echo $_SESSION['tipo_usuario'];
			if($_SESSION['tipo_usuario'] == 1){
				echo "<script Language='JavaScript'>document.getElementById('Publicar').style.visibility='visible';</script>";
			}
			if($_SESSION['tipo_usuario'] == 2){
				echo "<script Language='JavaScript'>document.getElementById('Publicar').style.display='none';</script>";
			}
	?>