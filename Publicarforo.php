<div class="Popforo">
	<h1>Crear nuevo hilo</h1>
	<fieldset>
		<form enctype="multipart/form-data" action="Publicarforo.php" method="POST">
			<p>Título</p><input type="text" name="titulo" id="titulo">
			<p>Descripcion</p><input type="text" name="des" id="des">
			<p id="Terminos"></p>
			<input type="submit" name="Aceptar" value="Subir">
		</form>
		<input type="submit" value="Cerrarforo" class="Closeforo">
	</fieldset>
</div>

<?php
include("conexion.php");
session_start();
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$des = $_POST['des'];
		$titulo = $_POST['titulo']
		$usuario = $_SESSION['id_usuario'];
		$dia = date("d");
		$mes = date("m");
		$ano = date("Y");
		$fecha = $ano."-".$mes."-".$dia;

		$consulta=mysqli_query($conexion,"SELECT * FROM usuario where id_usuario = $usuario");
		$result=mysqli_fetch_array($consulta);
		$usuario = $result['id_usuario'];
	
		mysqli_query($conexion,"INSERT into foro_hilo VALUES(NULL,'$fecha','$des','$titulo',$tipo, $artista)");

		header("Location: forotest.php");
	}
}
?>
