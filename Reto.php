<?php
include("conexion.php");

$consulta=mysqli_query($conexion,"SELECT * FROM retos");
$result=mysqli_fetch_array($consulta);

/*$consulta1=mysqli_query($conexion,"SELECT * FROM imagen_reto where id_aceptado=25");
$result1=mysqli_fetch_array($consulta1);
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reto</title>
<link rel="stylesheet" type="text/css" href="css/Reto.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/icomoon/style.css">
    	<script src="js/jquery.min.js"></script>
   <script type="text/javascript">
	$(document).ready(function(){
	    $(".Close").click(function(){
	        $(".overlay1").fadeOut(400);
	         $(".popup1").fadeOut(400);
	    });
	    $(".Abrir1").click(function(){
	        $(".overlay1").fadeIn(400);
	        $(".popup1").fadeIn(400);
	    });
});
</script>
</head>
<body>		
<?php include "BarraNavegacion.php"; ?>
<div class="Reto">
	<h1>Reto</h1>
	<div class="Fila">
		<div class="Descripcion"><?php echo $result['descripcion']; ?></div>
		<div class="Subir"><a class="Abrir1">Subir</a></div>
	</div>
	<div class="Fila">
		<div class="Dias"><p>Ultimo dia: <?php echo $result['fecha']; ?></p></div>
		<div class="Apoyo"><a href="">ApoyoVisual</a></div>
		<!--?php 	echo "<img src=".$result1['imagen'].">"; ?-->
	</div>
	
</div>
<div class="Retos">
	<p>Retos Pedientes</p>
	<div class="ListaR">
		<ul>
			
		</ul>
	</div>
</div>
<div class="Retos">
	<p>Retos Hechos</p>
	<div class="ListaR">
		<ul>

		</ul>
	</div>
</div>
<div class="Sub">Retos Anteriores</div>
<div class="overlay1">
	<div class="popup1">
		    		<?php include "Subir.php"; ?>
	
</div>
</div>
</body>
</html>