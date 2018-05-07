<div>
					<?php
					include "conexion.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
					$id = $_POST['publicacionC'];
					$usuario = $_POST['usuarioC'];
					$comentario = $_POST['Comentario'];
					$dia = date("d");
					$mes = date("m");
					$ano = date("Y");
					$fecha = $ano."-".$mes."-".$dia;
					mysqli_query($conexion,"INSERT into comentario VALUES(NULL,'$fecha','$comentario',$usuario,$id)");

}
						$consultaComentario = mysqli_query($conexion,"SELECT * FROM Comentario where id_publicacion = $id");
						while($resultCoemtario = mysqli_fetch_array($consultaComentario)){
							$id_usuario = $resultCoemtario['id_usuario'];
							$consultaUsuario=mysqli_query($conexion,"SELECT * FROM usuario where id_usuario = $id_usuario");
								$resultUsuario = mysqli_fetch_array($consultaUsuario);

							echo "<div class='Comentario'><a href='' class='usuarioComentario' id=".$id_usuario.">".$resultUsuario['nombre_usuario']."</a><div class='contenido'>".$resultCoemtario['contenido']."</div><div class='fecha'>".$id_resultCoemtario['fecha']."</div></div>";
						}

					?>
</div>