
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
			

			$consulta1 = mysqli_query($conexion,"SELECT * FROM me_gusta where id_usuario = $usuarioActual and id_publicacion = $id");
			if(mysqli_num_rows($consulta1)==1){
				$result1=mysqli_fetch_array($consulta1);

				if($result1['tipo_me_gusta']==1){
						echo "<script> 
							document.getElementById('1').style.color = 'blue' ;</script>";
						
				}else{
					echo "<script> 
							document.getElementById('0').style.color = 'blue' ;</script>";
				}

			}

		?>

	<div class="Contenedor">
		<div class="Box">
		<img src="<?php echo  $result['imagen']; ?>">
		<input type="hidden" name="" id="idI" value="<?php echo $id;?>">
	</div>
	<div class="Box1">
			<div><textarea readonly="readonly" ><?php echo $result['contenido']; ?></textarea></div>
			<div>
					<a class="Like" id="1">like</a> 
					<a class="Like" id="0">Dislike</a>
			</div>
			<div class="Comentarios">
				<div>
					<?php
						$consultaComentario = mysqli_query($conexion,"SELECT * FROM Comentario where id_publicacion = $id");
						while($resultCoemtario = mysqli_fetch_array($consultaComentario)){
							$id_usuario= $resultCoemtario['id_usuario'];
							$consultaUsuario=mysqli_query($conexion,"SELECT * FROM usuario where id_usuario = $id_usuario");
								$resultUsuario = mysqli_fetch_array($consultaUsuario);

							echo "<div class='Comentario'><a href='' class='usuarioComentario' id=".$id_usuario.">".$resultUsuario['nombre_usuario']."</a><div class='contenido'>".$resultCoemtario['contenido']."</div><div class='fecha'>".$resultCoemtario['fecha']."</div></div>";
						}

					?>
				</div>
				
			</div>
	<div  class="ComentarioNuevo">
				<form onSubmit="Enviar(); return false" id="ComentarioN">

					<input type="hidden" name="idLike" id="idLike">
					<input type="hidden" id="publicacionC" name="publicacionC" value="<?php echo $id; ?>">
					<input type="hidden"  id="usuarioC" name="usuarioC" value="<?php echo  $usuarioActual;?>">
					<input type="text" name="Comentario" id="Comentario">
					<input type="submit" name="" value=">" >
			</form>
			</div>
			
			
	</div>
	</div>
	



<script type="text/javascript">
	function Enviar(){
		
			$.ajax({

		    		url:'Comentario.php',
		    		method:'POST',
		    		data: $("#ComentarioN").serialize(),
		    		 success: function(res){
		    		 	
		    		 	$(".Comentarios").html(res);
		    		 	$("#Comentario").val("");
		    		 }	
		    		});
}
	$(document).ready(function(){
		$(".Like").click(function(){
		     	id=$(this).attr("id");
		     	$('#idLike').val(id);
		    	$.ajax({

		    		url:'MeGusta.php',
		    		method:'POST',
		    		data: $('#ComentarioN').serialize(),
		    		 success: function(res){

		    		 }	
		    		});
		    	
		    		if(document.getElementById(id).style.color == 'blue'){

		    			document.getElementById(id).style.color = 'black';
		    		}else{
		    			document.getElementById(id).style.color = 'blue';
		    		}
		    		if(id == 0 && document.getElementById(1).style.color == 'blue'){
		    				document.getElementById(1).style.color = 'black';
		    		}
							
		    		if(id == 1 && document.getElementById(0).style.color == 'blue'){
		    				document.getElementById(0).style.color = 'black';
		    		}
		    	
		    });
		$(".usuarioComentario").click(function(){
		    

		    	usuario = $(this).attr("id");
		    	direccion = "Perfiles.php?id_usuario="+usuario;
		    	$(".usuarioComentario").attr("href",direccion);
		    });
		    	
	});

</script>