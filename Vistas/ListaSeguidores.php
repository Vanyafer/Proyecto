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
	<h1>Seguidores</h1>
	<?php
	$id_usuarioA = $_SESSION['id_usuario'];
			$consultaSeguidores = mysqli_query($conexion,"SELECT * FROM seguidores where id_usuario2 = $id_usuarioA");

			if(mysqli_num_rows($consultaSeguidores)){
				while($resultSeguidores = mysqli_fetch_array($consultaSeguidores)){
					$usuarioSeg = $resultSeguidores['id_usuario1'];
					$consultaUsuario = mysqli_query($conexion,"SELECT * FROM usuario where id_usuario = $usuarioSeg");
					
					
					$resultUsuario = mysqli_fetch_array($consultaUsuario);
					$usuario1 =  $resultUsuario['id_usuario'];
					echo "<a href='Perfiles.php?id_usuario=".$usuario1."'>".$resultUsuario['nombre_usuario']."</a> <br>";
					}
			}
	?>
	</div>

	
	<input type="submit" value="Cerrar" class="Close" id="CloseSeguidores">
	</fieldset>
</div>