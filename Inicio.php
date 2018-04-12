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
	<script type="text/javascript">

	</script>
</head>
<body>		
<?php include "BarraNavegacion.php"; ?>
<div class="grid effect-2" id="grid">
		<?php
								
								$artista = $_SESSION['artista'];

								$consulta = mysqli_query($conexion,"SELECT * FROM publicacion where id_artista = $artista");

          						while ($result1 = mysqli_fetch_array($consulta)) {
           									echo "<div class='item'><img src=".$result1['imagen']."></div>";
													
													
          								}
        						?>
</div>


</body>
</html>
