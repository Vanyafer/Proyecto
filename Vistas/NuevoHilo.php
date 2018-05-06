<?php 
	include("conexion.php");
	include "BarraNavegacion.php";
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/Foro.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div id="NuevoHilo">
	<h1>Nuevo hilo</h1>
	<form enctype="multipart/form-data" action="Nuevohilo.php" method="POST">
		Titulo: <input type="text" name="titulo" id="titulo"><br>
		Descripcion: <textarea name="descripcion"></textarea><br>
		Sub-foro: 	<p><input type="radio" name="tipoF" id="tipoF" value="1" checked> Ideas </p>
					<p id=tipoF2><input type="radio" name="tipoF" id="tipoF2" value="2"> Objetos </p>
		<input type="submit" name="Aceptar" value="Crear">
	</form>
	</div>
</body>
</html>

<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$titulo = $_POST['titulo'];
		$des = $_POST['descripcion'];
		$tipo = $_POST['tipoF'];

		$dia = date("d");
		$mes = date("m");
		$ano = date("Y");
		$fecha = $ano."-".$mes."-".$dia;
		$usuario = $_SESSION['id_usuario'];
				
		mysqli_query($conexion,"INSERT into foro_hilo VALUES(NULL,'$fecha','$des', '$titulo', $tipo, $usuario)");
			
		header("Location: Foro.php");
	
	}
?>

<?php
			if($_SESSION['tipo_usuario']==1){
				echo "<script Language='JavaScript'>
				document.getElementById('tipoF2').style.visibility='visible';
				</script>";
			}
			if($_SESSION['tipo_usuario']==2){
				echo "<script Language='JavaScript'>document.getElementById('tipoF2').style.display='none';</script>";
			}
	?>