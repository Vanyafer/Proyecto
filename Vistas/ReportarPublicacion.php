<?php 
include("conexion.php");
include "BarraNavegacion.php"; 
$idreporpub = $_GET['id'];
$consulta = mysqli_query($conexion,"SELECT * from publicacion WHERE id_publicacion = $idreporpub");
$result = mysqli_fetch_array($consulta);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<h1>Está reportando la publicación:</h1>
		<p><?php echo "<img src=".$result['imagen'].">"; ?></p>
		<p></p>
	</div>
	<h3>Razón:</h3>
	<?php  
	echo '<form action="reportarpublicacion.php?id='.$idreporpub.'" method="POST">';
	?>
	<form action="reportarpublicacion.php" method="POST">
		<select name="razon" id="razon">
			<option value="Contenido Explícito Sin Filtro">Contenido Explícito Sin Filtro</option>
			<option value="Spam">Spam</option>
			<option value="Plagio">Plagio</option>
			<option value="Lenguaje Ofensivo">Lenguaje Ofensivo</option>
			<option value="Acoso">Acoso</option>
		</select>
		<p></p>
		<input type="submit" name="Reportar" value="Reportar">
	</form>
</body>
</html>


<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$razon = $_POST['razon'];
		$idreportado = $result['id_artista'];
		$idreportero = $_SESSION['id_usuario'];
		$idreporpub = $_GET['id'];
		mysqli_query($conexion,"INSERT into reportes_publicaciones VALUES(NULL, $idreporpub, $idreportado, $idreportero, '$razon')");

        header("Location: Inicio.php");
	}
?>