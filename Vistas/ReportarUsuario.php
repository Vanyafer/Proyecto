<?php 
include("conexion.php");
include "BarraNavegacion.php"; 
$idreporusu = $_GET['id'];
$consulta = mysqli_query($conexion,"SELECT * from usuario WHERE id_usuario = $idreporusu");
$result = mysqli_fetch_array($consulta);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<h1>Está reportando al usuario:</h1>
		<p><?php echo "<p>".$result['nombre_usuario']."</p>"; ?></p>
		<p></p>
	</div>
	<h3>Razón:</h3>
	<?php  
	echo '<form action="reportarusuario.php?id='.$idreporusu.'" method="POST">';
	?>
	<form action="reportarcomentario.php" method="POST">
		<p></p>
		<input type="text" name="razon" id="razon">
		<p></p>
		<input type="submit" name="Reportar" value="Reportar">
	</form>
</body>
</html>


<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$razon = $_POST['razon'];
		$idreportero = $_SESSION['id_usuario'];
		$idreporusu = $_GET['id'];
		mysqli_query($conexion,"INSERT into reportes_usuarios VALUES(NULL, $idreporusu, $idreportero, '$razon')");

        header("Location: Inicio.php");
	}
?>