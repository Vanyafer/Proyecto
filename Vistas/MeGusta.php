<?php
include "conexion.php";
$id = $_POST['idLike'];
$usuario = $_POST['usuarioC'];
$publicacion = $_POST['publicacionC'];
$consulta = mysqli_query($conexion,"SELECT * FROM me_gusta where id_usuario = $usuario and id_publicacion = $publicacion");

								
if(mysqli_num_rows($consulta)==1){
	$result=mysqli_fetch_array($consulta);
	if($result['tipo_me_gusta']==$id){
			mysqli_query($conexion,"DELETE FROM me_gusta where id_usuario = $usuario and id_publicacion = $publicacion");
	}else{
			mysqli_query($conexion,"UPDATE me_gusta set tipo_me_gusta = $id where id_usuario = $usuario and id_publicacion = $publicacion");
	}

}else{
	mysqli_query($conexion,"INSERT into me_gusta VALUES(NULL,$id,$publicacion,$usuario)");
}
?>