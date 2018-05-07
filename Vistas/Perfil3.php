<?php 
include ("Conexion.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<link rel="stylesheet" type="text/css" href="css/Perfil3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jquery.min.js"></script>
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
		
		
<div class="Nombre"><?php echo $nombre; ?><hr></div>

		<div class="Informacion">
			<p>Informacion</p>
			<div class="InformacionP"></div>
		</div>
	</div>
<div class="Opciones">
					
					<a href="">Portafolio</a>
					<a href="Seguir.php?id_usuario=<?php echo $id_usuario ?>" id="Seguir">Seguir</a>
					<a href="Amigos.php?id_usuario=<?php echo $id_usuario ?>" id="Amigo">Agregar Amigo</a>
					<a href="">Enviar mensaje</a>
					<a href="reportarusuario.php?id=<?php echo $id_usuario ?>">Reportar Usuario</a>
				
			</div>
</div>
<div class="overlayAmigo">
     		<?php include "ListaAmigos.php"; ?>
</div>
</body>
</html>
<?php
if($id_usuario == $_SESSION['id_usuario']){
	echo "<script>
				$('#Seguir').attr('href','');
				$('#Seguir').addClass('AbrirSeguir');
		</script>";
	echo "<script>
				$('#Amigo').attr('href','');
				$('#Amigo').addClass('AbrirAmigo');
		</script>";
}else{
	$id_usuario1 = $_SESSION['id_usuario'];
	$consultaSeguidos = mysqli_query($conexion,"SELECT * FROM seguidores where id_usuario1 = $id_usuario1 and id_usuario2 = $id_usuario");
	$consultaAmigos = mysqli_query($conexion,"SELECT * FROM amigos where id_usuario1 = $id_usuario1 and id_usuario2 = $id_usuario");
if(mysqli_num_rows($consultaSeguidos)==1){
	echo "<script>$('#Seguir').html('Dejar de seguir');</script>";
}
if(mysqli_num_rows($consultaAmigos)==1){
	$resultAmigos=mysqli_fetch_array($consultaAmigos);
	if($resultAmigos['estado']==0){
	echo "<script>$('#Amigo').html('Solicitud enviada');</script>";
}else{
	echo "<script>$('#Amigo').html('Eliminar amigo');</script>";
}
}
}
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#Close").click(function(){
		       	$(".overlay2").fadeOut(400);
		    });
		    $(".AbrirAmigo").click(function(){
		    	
		        $(".overlayAmigo").fadeIn(400);
		    });

	});
</script>