<?php
include("conexion.php");
isset($_SESSION['Correo']);
		
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/BarraNavegacion.css">

</head>
<body>
<nav class="Barra">
	<a href="Inicio.php">Inicio</a>
	<a href="Foro.php">Foro</a>
	<a id="reto" href="Reto.php">Reto</a>
	<a href="Cerrarsesion.php">Cerrar sesion</a>
	
	<a href="Mensajes.php" class="derecha">Mensajes</a>
	<a href="Perfiles.php" class="derecha">Perfil</a>
	<a href="Configuracion.php" class="derecha">Configuracion</a>
</nav>
</body>
</html>
	<?php
			if($_SESSION['tipo_usuario']==1){
				echo "<script Language='JavaScript'>
				document.getElementById('reto').style.visibility='visible';
				</script>";
			}
			if($_SESSION['tipo_usuario']==2){
				echo "<script Language='JavaScript'>document.getElementById('reto').style.display='none';</script>";
			}
	?>