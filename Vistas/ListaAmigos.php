<script type="text/javascript">
	$(document).ready(function(){
		$(".usuario").click(function(){
		    	usuario = $(this).attr("id");
		    	direccion = "Perfiles.php?id_usuario="+usuario;
		    	$(".usuarioComentario").attr("href",direccion);
		    });
		    	
	});
</script>
<div class="Pop">
	
	<fieldset>
	<div class="Box">
	<h1>Amigos</h1>
	<?php
	$id_usuario = $_SESSION['id_usuario'];
			$consulta = mysqli_query($conexion,"SELECT * FROM amigos where estado = 1 and (id_usuario1 = $id_usuario or id_usuario2 = $id_usuario");

				while($result = mysqli_fetch_array($consulta)){
					$usuario1 = $result['id_usuario1'];
					$usuario2 = $result['id_usuario2'];
					$consultaUsuario = mysqli_query($conexion,"SELECT * FROM usuario where (id_usuario = $usuario1) OR  (id_usuario = $usuario2)");
					}
	?>
	</div>

	<div class="Box">
	<h1>Solicitudes de amistad</h1>
	<?php
	$id_usuario = $_SESSIOB['id_usuario'];
			$consulta = mysqli_query($conexion,"SELECT * FROM amigos where estado = 0 and id_usuario2 = $id_usuario");

				while($result = mysqli_fetch_array($consulta)){
					$usuario1 = $result['id_usuario1'];
					$consultaUsuario = mysqli_query($conexion,"SELECT * FROM usuario where id_usuario = $usuario1");
					echo "<a href='' class='usuario' id=".$id_usuario.">".$resultUsuario['nombre_usuario']."</a class='Aceptar'><a>Aceptar solicitud</a>";
					}
	?>
	</div>
	<input type="submit" value="Cerrar" class="Close">
	</fieldset>
</div>