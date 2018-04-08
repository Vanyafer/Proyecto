<?php
include("conexion.php");

session_start();
if(!isset($_SESSION['Correo']))header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mensajes</title>
	<link rel="stylesheet" type="text/css" href="css/Mensajes.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include "BarraNavegacion.php"; ?>
<div class="Mensajes">
	<p>Mensajes</p>
	<div class="Todos">
		<!--div class="Usuarios">
		<p>Nombre de usuario</p>
		<div>
			
		</div>
		</div-->
	</div>
</div>
<div class="Conversacion">
	<p>Nombre de usuario</p>
	<div>
		
	</div>
</div>
</body>
</html>