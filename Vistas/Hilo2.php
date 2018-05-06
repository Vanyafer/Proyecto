<?php
	include("conexion.php");
	include "BarraNavegacion.php";

	$idhilo = $_GET['id'];
	$consulta1 = mysqli_query($conexion,"SELECT * from foro_respuesta LEFT JOIN usuario ON foro_respuesta.id_usuario = usuario.id_usuario where id_forohilo = $idhilo");
	$titulo = mysqli_query($conexion,"SELECT * FROM foro_hilo WHERE id_forohilo = $idhilo");
	$result2 = mysqli_fetch_array($titulo);
	$autor = $result2['id_usuario'];
	$consulta2 = mysqli_query($conexion,"SELECT nombre_usuario FROM usuario WHERE id_usuario = $autor");
	$result3 = mysqli_fetch_array($consulta2);
	echo '<div class="Foros">
		<p>'.$result2['titulo'].'</p>
		<table>
		<tr>
		<th>Descripcion</th>
		<th>Usuario</th>
		</tr>
		<tr>
		<td class="izq">'.$result2['contenido'].'</td>
		<td class="der">'.$result3['nombre_usuario'].'</td>
		</tr>
		</table>
		</div>';

      while ($result1 = mysqli_fetch_array($consulta1)) {
     	echo '<div class="Foros">';
     		echo '<table>';
     		echo '<tr>';
     		echo '<th>Usuario</th>';
     		echo '<th>Respuesta</th>';
     		echo '</tr>';
     		echo '<tr>';
        	echo'<td class="der">';	
           		echo "<h3>".$result1['nombre_usuario']."</h3>";
        	echo "</td>";
       		echo '<td class="izq">';
            	echo "<h3>".$result1['contenido']."</h3>";
        	echo "</td>";
        	echo '</tr>';
        	echo '</table>';
    	echo "</div>";

      } 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/Foro.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="Foros">
	<?php 
		echo '<form method="post" action="respuesta.php?id='. $idhilo = $_GET['id'] . '"	>
		<h1>Escribe una respuesta</h1>
    	<textarea name="contenido"></textarea>
    	<p><input type="submit" value="Subir respuesta">
		</form>
		<a class="Boton" href="favoritos.php?id='. $idhilo = $_GET['id'] .'">Favorito</a>
		';
	 ?>

</div>
</body>
</html>
