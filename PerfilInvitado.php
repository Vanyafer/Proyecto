<?php
include("conexion.php");
session_start();
if(!isset($_SESSION['Correo']))header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<link rel="stylesheet" type="text/css" href="css/PerfilInvitado.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include "BarraNavegacion.php"; ?>
<div class="Perfil">
	<div class="Datos">
		<div class="Box">
			<div class="Foto"><img src=""> Hola</div>
			<div class="mensaje"><a href="Mensajes.php">Enviar mensaje</a></div>
		</div>
		
		
		<div class="Box">
			<div class="Nombre">Nombre<hr></div>
			<br>
			<div class="Informacion">
				<p>Informacion</p>
				<div class="InformacionP"></div>
			</div>
			<div class="Informacion">
				<p>Informacion</p>
				<div class="InformacionP"></div>
			</div>
		</div>
		
		
	</div>



</div>
</body>
</html>