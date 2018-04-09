<?php
include("conexion.php");

$consulta=mysqli_query($conexion,"SELECT * FROM retos");
$result=mysqli_fetch_array($consulta);


$consulta1=mysqli_query($conexion,"SELECT * FROM imagen_reto where id_aceptado=25");
$result1=mysqli_fetch_array($consulta1);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Reto</title>
<link rel="stylesheet" type="text/css" href="css/Reto1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</head>
<body>		
<?php include "BarraNavegacion.php"; ?>

	<div class="Reto">
	
	<div class="Box">
		<h1>Reto</h1>
		<div class="Descripcion"><?php echo $result['descripcion']; ?></div>
		<div class="Dias"><p>Ultimo dia: <?php echo $result['fecha']; ?></p></div>
		<div class="Subir"><a class="Abrir1">Subir</a></div>
	</div>
	<div class="Box">

		<div class="slideshow-container">

			<div class="mySlides fade">
			  <img src="./imgReto/perro.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <img src="./imgReto/gorro.jpg" style="width:100%">
			</div>

			<div class="mySlides fade">
			  <img src="./imgReto/pelota.jpg" style="width:100%">
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>
		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		</div>
	</div>
	
	</div>
<!--div class="Reto">
	<div class="Retos">
		<p>Retos hechos</p>
		
	</div>
	<div class="Retos">
		<p>Todos</p>
		
	</div>
</div-->

<!--div class="overlay1">
	<div class="popup1">
		    		<?php include "Subir.php"; ?>
	
</div>
</div-->
</body>
</html>
