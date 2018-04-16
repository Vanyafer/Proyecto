
<?php
include("conexion.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
	$GLOBALS['id_p'] = $_POST['idp'];
}
session_start();
			$usuarioActual = $_SESSION['id_usuario'];
			
			$id = $GLOBALS['id_p'];
			$consulta = mysqli_query($conexion,"SELECT * FROM publicacion where id_publicacion = $id");
			$result = mysqli_fetch_array($consulta);
			

		?>
	
	<div class="Contenedor">
		<div class="Box">
		<img src="<?php echo  $result['imagen']; ?>">
		<input type="hidden" name="" id="idI" value="<?php echo $id;?>">
	</div>
	<div class="Box1">
			<div><textarea readonly=”readonly” ><?php echo $result['contenido']; ?></textarea></div>
			<div><a > like </a><a>Dislike</a></div>
			<div class="Comentarios">
				<div>
					<?php
						$consultaComentario = mysqli_query($conexion,"SELECT * FROM Comentario where id_publicacion = $id");
						while($resultCoemtario = mysqli_fetch_array($consultaComentario)){
							$usuario= $resultCoemtario['id_usuario'];
							$consultaUsuario=mysqli_query($conexion,"SELECT * FROM usuario where id_usuario = $usuario");
								$resultUsuario = mysqli_fetch_array($consultaUsuario);

							echo "<div class='Comentario'><a class='usuario'>".$resultUsuario['nombre_usuario']."</a><div class='contenido'>".$resultCoemtario['contenido']."</div><div class='fecha'>".$resultCoemtario['fecha']."</div></div>";
						}

					?>
				</div>
				
			</div>
	<div  class="ComentarioNuevo">
				<form onSubmit="Enviar(); return false" id="ComentarioN">
					<input type="hidden" id="publicacionC" name="publicacionC" value="<?php echo $id; ?>">
					<input type="hidden"  id="usuarioC" name="usuarioC" value="<?php echo  $usuarioActual;?>">
					<input type="text" name="Comentario" id="Comentario">
					<input type="submit" name="" value=">" >
			</form>
			</div>
			
			
	</div>
	</div>
	



