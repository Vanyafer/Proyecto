<?php 
include("conexion.php");
include "BarraNavegacion.php"; 
$idreporcom = $_GET['id'];
$consulta = mysqli_query($conexion,"SELECT * from comentario WHERE id_comentario = $idreporcom");
$result = mysqli_fetch_array($consulta);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/Foro.css">
</head>
<body>
	<div class="Foros">
		<h1>Está reportando el comentario:</h1>
		<p><?php echo "<p>".$result['contenido']."</p>"; ?></p>
		<p></p>
	<h3>Razón:</h3>
	<?php  
	echo '<form action="reportarcomentario.php?id='.$idreporcom.'" method="POST">';
	?>
	<form action="reportarcomentario.php" method="POST">
		<select name="razon" id="razon">
			<option value="Spam">Spam</option>
			<option value="Lenguaje Ofensivo">Lenguaje Ofensivo</option>
			<option value="Acoso">Acoso</option>
		</select>
		<p></p>
		<input type="submit" name="Reportar" value="Reportar">
	</form>
	</div>
</body>
</html>


<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$razon = $_POST['razon'];
		$idreportado = $result['id_usuario'];
		$idreportero = $_SESSION['id_usuario'];
		$idreporcom = $_GET['id'];
		mysqli_query($conexion,"INSERT into reportes_comentarios VALUES(NULL, $idreporcom, $idreportado, $idreportero, '$razon')");

        header("Location: Inicio.php");
	}
?>