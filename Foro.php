<?php
include("conexion.php");
session_start();
if(!isset($_SESSION['Correo']))header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Foro</title>
	<link rel="stylesheet" type="text/css" href="css/Foro.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>		
<?php include "BarraNavegacion.php"; ?>
<div class="Foros">
	<p>Favoritos</p>
	<div class="ListaF">
		<ul>
			
		</ul>
	</div>
</div>
<div class="Foros" id="Objetos">
	<p>Objetivos</p>
	<div class="ListaF">
		<ul>

		</ul>
	</div>
</div>
<div class="Foros">
	<p>Ideas</p>
	<div class="ListaF">
		<ul>

		</ul>
	</div>
</div>
</body>
</html>
<?php
			if($_SESSION['tipo_usuario']==1){
				echo "<script Language='JavaScript'>
				document.getElementById('Objetos').style.visibility='visible';
				</script>";
			}
			if($_SESSION['tipo_usuario']==2){
				echo "<script Language='JavaScript'>document.getElementById('Objetos').style.display='none';</script>";
			}
	?>