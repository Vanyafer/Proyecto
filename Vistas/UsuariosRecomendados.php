<?php
include("conexion.php");
include "BarraNavegacion.php";


$usuario = $_SESSION['id_usuario'];
$consulta0 = mysqli_query($conexion,"SELECT * FROM artista where id_usuario = $usuario");
$result0 = mysqli_fetch_array($consulta0);
$pais = $result0['id_pais'];
$tecnica = $result0['tecnica_interes'];
$consulta1 = mysqli_query($conexion,"SELECT * FROM artista where id_pais = $pais");
$consulta2 = mysqli_query($conexion,"SELECT * FROM artista where tecnica_interes = '$tecnica'");
$consulta3 = mysqli_query($conexion,"SELECT * FROM pais where id_pais = $pais");

$result2 = mysqli_fetch_array($consulta2);
$result3 = mysqli_fetch_array($consulta3);

$nombtec = $result2['tecnica_interes'];
$nombpais = $result3['nombre_pais'];


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/Foro.css">
	<title>Usuarios Recomendados</title>
</head>
<body>
	<div class="Medio">
		<?php
		echo '
			<p>En '.$nombpais.'</p>
			<table>
      		<tr>
            <th class="cinta"></th>
            <th class="cinta"></th>
         	</tr>';
           while ($result1 = mysqli_fetch_array($consulta1)) {
           	$idart = $result1['id_usuario'];
           	$consulta4 = mysqli_query($conexion,"SELECT * FROM usuario WHERE id_usuario = $idart");
           	$result4 = mysqli_fetch_array($consulta4);
           	$imgper = $result1['imagen_perfil'];
           	$nombusu = $result4['nombre_usuario'];
           		echo "<tr>";
            	echo'<td class="foto">';	
               		echo '<img src= "'.$imgper.'">';
            	echo "</td>";
           		echo '<td class="usuario">';
                	echo '<a>'.$nombusu.'</a>';
            	echo "</td>";
           }
           echo "</table>";
      	?>
	</div>
	<div class="Medio">
		<?php
		echo '
			<p>Técnica '.$tecnica.'</p>
			<table>
      		<tr>
            <th class="cinta"></th>
            <th class="cinta"></th>
         	</tr>';
           while ($result2 = mysqli_fetch_array($consulta2)) {
           	$idarti = $result2['id_usuario'];
           	$consulta5 = mysqli_query($conexion,"SELECT * FROM usuario WHERE id_usuario = $idarti");
           	$result5 = mysqli_fetch_array($consulta5);
           	$imgper = $result2['imagen_perfil'];
           	$nombusu = $result5['nombre_usuario'];
           		echo "<tr>";
            	echo'<td class="foto">';	
               		echo '<img src= "'.$imgper.'">';
            	echo "</td>";
           		echo '<td class="usuario">';
                	echo '<a>'.$nombusu.'</a>';
            	echo "</td>";
           }
           echo "</table>";
      	?>
	</div>
</body>
</html>

