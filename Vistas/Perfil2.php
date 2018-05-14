
<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<link rel="stylesheet" type="text/css" href="css/Perfil2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include "BarraNavegacion.php"; 
$id_usuario = $_GET['id_usuario'];

$consultaDatos=mysqli_query($conexion,"SELECT * FROM usuario where id_usuario = $id_usuario");
$resultDatos=mysqli_fetch_array($consultaDatos);
$nombre = $resultDatos['nombre_usuario'];


?>
<div class="Perfil">
	<div class="Datos">
	<div class="Foto">Hola</div>
		
			<div class="Opciones">
					<div class="mensaje"><a href="">Enviar mensaje</a></div>
					<a href="">Portafolio</a>
					
					<a href="Seguir.php?id_usuario=<?php echo $id_usuario ?>" id="Seguir">Seguir</a>
					<a href="Amigos.php?id_usuario=<?php echo $id_usuario ?>" id="Amigo">Agregar Amigo</a>
					<a href="reportarusuario.php?id=<?php echo $id_usuario ?>">Reportar Usuario</a>
				
			</div>
		
		
		<div class="Informacion">
			<p>Informacion</p>
			<div class="InformacionP"></div>
		</div>
	</div>

<div class="Nombre"><?php echo $nombre; ?><hr></div>

</div>
<?php include "ConfiguracionPerfil.php"; ?>
</body>
</html>
