<?php
include("conexion.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/Inicio.css">
	<script type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="js/modernizr.custom.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/imagesloaded.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/AnimOnScroll.js"></script>
		
</head>
<body>		
<?php include "BarraNavegacion.php"; ?>
<div class="grid effect-3" id="grid">
		<?php
								
								$artista = $_SESSION['artista'];

								$consulta = mysqli_query($conexion,"SELECT * FROM publicacion where id_artista = $artista");

          						while ($result1 = mysqli_fetch_array($consulta)) {
           									echo "<li><a href='#''><img src=".$result1['imagen']."></a></li>";
													
													
          								}
        						?>
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