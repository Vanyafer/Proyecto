<?php
include "Conexion.php";
$id_usuario = $_GET['id_usuario'];
echo $id_usuario;
$consulta = mysqli_query($conexion,"SELECT * FROM usuario where id_usuario = $id_usuario");
$result = mysqli_fetch_array($consulta);
			if($result['tipo_usuario']==1){

	$consulta=mysqli_query($conexion,"SELECT * FROM artista where id_usuario = $id_usuario");
$result=mysqli_fetch_array($consulta);
$diseno = $result['id_diseno'];
$consultaDiseno=mysqli_query($conexion,"SELECT * FROM diseno where id_diseno = $diseno");
$resultDiseno=mysqli_fetch_array($consultaDiseno);
$diseno = $resultDiseno['tipo_perfil'];

				header("Location: Perfil".$diseno.".php?id_usuario=$id_usuario");
			}

			
			if($result['tipo_usuario']==2){
				header("Location: PerfilInvitado.php?id_usuario=$id_usuario");
			}
?>