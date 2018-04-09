<div class="Pop">
	<h1>Subir</h1>
	<fieldset>
		<form enctype="multipart/form-data" action="Subir.php" method="POST">
			<input type="file" name="image">
			<input type="submit" name="Aceptar" value="Subir">
		</form>
		<input type="submit" value="Cerrar" class="Close">
	</fieldset>
</div>
<?php
include("conexion.php");
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$folder="./imgReto/";
		$tmp_name = $_FILES["image"]["tmp_name"];
	if(!move_uploaded_file( $tmp_name,"$folder".$_FILES["image"]["name"])){
		echo "error;";
	}else{
		$consulta=mysqli_query($conexion,"SELECT * FROM retos");
		$result=mysqli_fetch_array($consulta);
		$reto = $result['id_reto'];
		$usuario = $_SESSION['id_usuario'];
		$consulta=mysqli_query($conexion,"SELECT * FROM artista where id_usuario = $usuario");
		$result=mysqli_fetch_array($consulta);
		$artista = $result['id_artista'];

		mysqli_query($conexion,"INSERT into retos_aceptados VALUES(NULL,$artista,$reto)");

		$consulta=mysqli_query($conexion,"SELECT MAX(id_aceptado) as id FROM retos_aceptados");

		$result=mysqli_fetch_array($consulta);
		$id = $result['id'];

		mysqli_query($conexion,"INSERT into imagen_reto VALUES(NULL,'$folder".$_FILES["image"]["name"]."',$id)");
		header("Location: Reto.php");
	}

}
?>
