<link rel="stylesheet" type="text/css" href="../css/Popup.css">
<div class="Pop">
	<h1>Publicar</h1>
	<fieldset>
		<form enctype="multipart/form-data" action="Publicar.php" method="POST">
			<input type="text" name="des" id="des">
			<input type="file" name="image">
			<p>Tipo de usuario:</p>
							<p><input type="radio" name="tipoP" id="TipoP" value="0" checked> Publico </p>
							<p><input type="radio" name="tipoP" id="TipoP" value="1"> Solo amigos </p>
							<p> <input type="checkbox" name="edad" id="edad"> +18 </p>
							<p id="Terminos"></p>
							<input type="submit" name="Aceptar" value="Subir">
		</form>
		<input type="submit" value="Cerrar" class="Close">
	</fieldset>
</div>

<?php
include("Conexion.php");

	if($_SERVER['REQUEST_METHOD']=='POST'){
		session_start();
	
		$des = $_POST['des'];
		if(isset($_POST['edad'])){
			$edad = 1;
		
		}else{
			$edad = 0;
		}
		$tipo = $_POST['tipoP'];
		$dia = date("d");
		$mes = date("m");
		$ano = date("Y");
		$fecha = $ano."-".$mes."-".$dia;
		$usuario = $_SESSION['id_usuario'];
		$consulta=mysqli_query($conexion,"SELECT * FROM artista where id_usuario = $usuario");
		$result=mysqli_fetch_array($consulta);
		$artista = $result['id_artista'];
	 
		if($_FILES["image"]["name"]==''){
			mysqli_query($conexion,"INSERT into publicacion VALUES(NULL,'$fecha',$edad,'$des',NULL,$tipo,null,$artista)");
		}else{
			$folder="./Imagenes/imgPublicacion/";
			$tmp_name = $_FILES["image"]["tmp_name"];
			move_uploaded_file( $tmp_name,"$folder".$_FILES["image"]["name"]);
			mysqli_query($conexion,"INSERT into publicacion VALUES(NULL,'$fecha',$edad,'$des',NULL,$tipo,'$folder".$_FILES["image"]["name"]."',$artista)");
		}
}
?>
