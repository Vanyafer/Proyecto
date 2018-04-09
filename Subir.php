<div class="Pop">
	<h1>Subir</h1>
	<fieldset>
		<form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
			<input type="file" name="image">
			<input type="submit" name="Aceptar" value="Subir">
		</form>
		<input type="submit" value="Cerrar" class="Close">
	</fieldset>
</div>
<?php
include "Conexion.php";
session_start();
isset($_SESSION['id_usuario']);
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$folder="/xampp/htdocs/Proyecto/imgReto/";
		$tmp_name = $_FILES["image"]["tmp_name"];
	if(!move_uploaded_file( $tmp_name,"$folder".$_FILES["image"]["name"])){
		echo "error;";
	}else{
		$consulta=mysqli_query($conexion,"SELECT * FROM retos");
		$result=mysqli_fetch_array($consulta);
		$reto = $result['id_reto'];
		$usuario = echo $_SESSION['id_usuario'];
		/*
		$consulta=mysqli_query($conexion,"SELECT * FROM artista where id_usuario = '$usuario'");
		$result=mysqli_fetch_array($consulta);
		$artista = $result['id_artista'];
		if(!mysqli_query($conexion,"INSERT into retos_aceptados VALUES(NULL,$artista,$reto)")) die("No se pudo insertar: ".$error);
*/
		//("Location: Reto.php");
	}

}
?>
