<?php
include("conexion.php");
isset($_SESSION['Correo']);
		
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/BarraNavegacion.css">
    <link rel="stylesheet" href="css/icomoon/style.css">

</head>
<body>
<nav class="barra">
<ul>
	<li><a href="Inicio.php">Inicio</a></li>
	<li><a href="Foro.php" class="icon-bullhorn"></a></li>
	<li><a id="reto" href="Reto.php" class="icon-pen"></a></li>
	
	<li><a href="" class="icon-newspaper"></a></li>
	<li><a href="" class="icon-quill"></a></li>

	<li><a href="Cerrarsesion.php">C</a></li>
	<li><a href="Mensajes.php" class="icon-bubbles4"></a></li>
	<li><a href="Perfiles.php" class="icon-user"></a></li>
	<li><a href="Configuracion.php" class="icon-cog"></a></li>
</ul>	
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