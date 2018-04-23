<?php
	include("conexion.php");
	include "BarraNavegacion.php";

	$idhilo = $_GET['id'];
	$consulta1 = mysqli_query($conexion,"SELECT * from foro_respuesta LEFT JOIN usuario ON foro_respuesta.id_usuario = usuario.id_usuario where id_forohilo = $idhilo");
	$titulo = mysqli_query($conexion,"SELECT * FROM foro_hilo WHERE id_forohilo = $idhilo");
	$result2 = mysqli_fetch_array($titulo);
	echo '<div class="Foros">
		<p>'.$result2['titulo'].'</p>
		<p>'.$result2['contenido'].'</p>
		<table>';

      while ($result1 = mysqli_fetch_array($consulta1)) {
      		echo "<tr>";
        	echo'<td class="der">';	
           		echo "<h3>".$result1['correo']."</h3>";
        	echo "</td>";
       		echo '<td class="izq">';
            	echo "<h3>".$result1['contenido']."</h3>";
        	echo "</td>";
    	echo "</tr>";
      } 
  	echo "</table>";
  	echo "</div>"
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/Foro.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form method="post" action="respuesta.php?id=1">
	<h1>Escribe una respuesta</h1>
    <textarea name="contenido"></textarea>
    <input type="submit" value="Subir respuesta">
</form>
<a href="favoritos.php?id=1">Favorito</a>
</body>
</html>
