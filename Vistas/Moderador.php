<?php
include("Conexion.php");
include "BarraNavegacion.php";

$reporpub=mysqli_query($conexion, "SELECT * FROM reportes_publicaciones ORDER BY id_reporte ASC");
$reporcom=mysqli_query($conexion, "SELECT * FROM reportes_comentarios ORDER BY id_reporte ASC");
$reporusu=mysqli_query($conexion, "SELECT * FROM reportes_usuarios ORDER BY id_reporte ASC");


echo '<div class="Foros">
		<table>
      	<tr>
        	<th>Usuario</th>
            <th>Publicacion</th>
            <th>Reportado por</th>
            <th>Razón</th>
            <th>Aprobar</th>
        </tr>';
          while ($resultpub = mysqli_fetch_array($reporpub)) {
          	$id_reporte = $resultpub['id_reporte'];
          	$id_pub = $resultpub['id_publicacion'];
          	$id_reportado = $resultpub['id_reportado'];
          	$id_reportero = $resultpub['id_reportero'];
          	$razon = $resultpub['razon'];

          	$consulta1=mysqli_query($conexion, "SELECT * FROM publicacion WHERE id_publicacion = $id_pub");
          	$consulta2=mysqli_query($conexion, "SELECT * FROM artista WHERE id_artista = $id_reportado");
          	$consulta3=mysqli_query($conexion, "SELECT * FROM usuario WHERE id_usuario = $id_reportero");
          	$result1=mysqli_fetch_array($consulta1);
          	$result2=mysqli_fetch_array($consulta2);
          	$result3=mysqli_fetch_array($consulta3);
          	$id_artista = $result2['id_usuario'];
          	$consulta4 = mysqli_query($conexion, "SELECT * FROM usuario WHERE id_usuario = $id_artista");
          	$result4=mysqli_fetch_array($consulta4);

          	echo "<tr>";
            	echo'<td class="der">';	
               		echo '<h3>'.$result4['nombre_usuario'].'</h3>';
            	echo "</td>";
           		echo '<td class="der">';
                	echo '<h3>'.$result1['imagen'].'</h3>';
            	echo "</td>";
              echo '<td class="der">';
                  echo '<h3>'.$result3['nombre_usuario'].'</h3>';
              echo "</td>";
              echo '<td class="der">';
                  echo '<h3>'.$razon.'</h3>';
              echo "</td>";
              echo '<td class="der">';
                  echo '<a href="AprobarReporte.php">Sí</a><br>';
                  echo '<a href="DenegarReporte.php">No</a>';
              echo "</td>";
        	echo "</tr>";
          }
          echo "</table>";
          echo "</div>";

echo '<div class="Foros">
		<table>
      	<tr>
        	<th>Usuario</th>
            <th>Comentario</th>
            <th>Reportado por</th>
            <th>Razón</th>
            <th>Aprobar</th>
        </tr>';
          while ($resultcom = mysqli_fetch_array($reporcom)) {
          	$id_reporte = $resultcom['id_reporte'];
          	$id_com = $resultcom['id_comentario'];
          	$id_reportado = $resultcom['id_reportado'];
          	$id_reportero = $resultcom['id_reportero'];
          	$razon = $resultcom['razon'];

          	$consulta1=mysqli_query($conexion, "SELECT * FROM comentario WHERE id_comentario = $id_com");
          	$consulta2=mysqli_query($conexion, "SELECT * FROM usuario WHERE id_usuario = $id_reportado");
          	$consulta3=mysqli_query($conexion, "SELECT * FROM usuario WHERE id_usuario = $id_reportero");
          	$result1=mysqli_fetch_array($consulta1);
          	$result2=mysqli_fetch_array($consulta2);
          	$result3=mysqli_fetch_array($consulta3);

          	echo "<tr>";
            	echo'<td class="der">';	
               		echo '<h3>'.$result2['nombre_usuario'].'</h3>';
            	echo "</td>";
           		echo '<td class="der">';
                	echo '<h3>'.$result1['contenido'].'</h3>';
            	echo "</td>";
              echo '<td class="der">';
                  echo '<h3>'.$result3['nombre_usuario'].'</h3>';
              echo "</td>";
              echo '<td class="der">';
                  echo '<h3>'.$razon.'</h3>';
              echo "</td>";
              echo '<td class="der">';
                  echo '<a href="AprobarReporte.php">Sí</a><br>';
                  echo '<a href="DenegarReporte.php">No</a>';
              echo "</td>";
        	echo "</tr>";
          }
          echo "</table>";
          echo "</div>";

echo '<div class="Foros">
		<table>
      	<tr>
        	<th>Usuario</th>
            <th>Reportado por</th>
            <th>Razón</th>
            <th>Aprobar</th>
        </tr>';
          while ($resultusu = mysqli_fetch_array($reporusu)) {
          	$id_reporte = $resultusu['id_reporte'];
          	$id_reportado = $resultusu['id_reportado'];
          	$id_reportero = $resultusu['id_reportero'];
          	$razon = $resultusu['razon'];

          	$consulta2=mysqli_query($conexion, "SELECT * FROM usuario WHERE id_usuario = $id_reportado");
          	$consulta3=mysqli_query($conexion, "SELECT * FROM usuario WHERE id_usuario = $id_reportero");
          	$result2=mysqli_fetch_array($consulta2);
          	$result3=mysqli_fetch_array($consulta3);

          	echo "<tr>";
            	echo'<td class="der">';	
               		echo '<h3>'.$result2['nombre_usuario'].'</h3>';
            	echo "</td>";
              echo '<td class="der">';
                  echo '<h3>'.$result3['nombre_usuario'].'</h3>';
              echo "</td>";
              echo '<td class="der">';
                  echo '<h3>'.$razon.'</h3>';
              echo "</td>";
              echo '<td class="der">';
                  echo '<a href="AprobarReporte.php">Sí</a><br>';
                  echo '<a href="DenegarReporte.php">No</a>';
              echo "</td>";
        	echo "</tr>";
          }
          echo "</table>";
          echo "</div>";

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/Foro.css">
</head>
<body>

</body>
</html>