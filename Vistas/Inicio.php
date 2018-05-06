<?php
include("conexion.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/Inicio.css">
	<link rel="stylesheet" type="text/css" href="css/Publicacion.css">

	<script type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/imagesloaded.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/AnimOnScroll.js"></script>
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
			
	    	$("#Close").click(function(){
		       	$(".overlay2").fadeOut(400);
		    });
		    $(".Abrir2").click(function(){
		    	id=$(this).attr("id");
		    	usuario = $(this).attr("name");

		    	$("#idp").val(id);
		    	$(".usuario").html(usuario);
		    	$.ajax({

		    		url:'Publicacion.php',
		    		method:'POST',
		    		data: $("#idp").serialize(),
		    		 success: function(res){
		    		 	$(".Imagen").html(res);
		    		 }	
		    		});
		        $(".overlay2").fadeIn(400);
		    });

		   
		});
		</script>

</head>
<body>		
<?php include "BarraNavegacion.php"; ?>
<div class="grid effect-3" id="grid">
		<?php
								
								//$artista = $_SESSION['artista'];

								$consulta = mysqli_query($conexion,"SELECT * FROM publicacion order by id_publicacion DESC");

          						while ($result1 = mysqli_fetch_array($consulta)) {
          									$artista = $result1['id_artista'];
											$consulta1=mysqli_query($conexion,"SELECT * FROM artista where id_artista = $artista");
											$result2 = mysqli_fetch_array($consulta1);
											$usuario = $result2['id_usuario'];
											$consulta2=mysqli_query($conexion,"SELECT * FROM usuario where id_usuario = $usuario");
											$result3 = mysqli_fetch_array($consulta2);
											if(isset($result1['imagen'])){
           									echo "<li><a ><img src=".$result1['imagen']." id=".$result1['id_publicacion']." class='Abrir2' name=".$result3['nombre_usuario']."></a></li>";
												
											}else{
												echo "<li class='Abrir2 texto' name=".$result3['nombre_usuario']." id=".$result1['id_publicacion']."><p>".$result3['nombre_usuario']."</p><textarea readonly='readonly'>".$result1['contenido']." </textarea></li>";
												}	
													
          								}
        						?>
</div>
<div class="overlay2">
     			<input type="hidden" id="idp" name="idp">
     		<div class="PopImagen">
     		<h1 ><a href="Perfiles.php" class="usuario"></a><samp id="Close">x</samp></h1>
     		<fieldset>
     			
     			<div class="Imagen">
     			
							
     			</div>
     		
     		</fieldset>
</div>
</div>
</body>
</html>
<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script>
		