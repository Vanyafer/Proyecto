<?php
include("Conexion.php");
Session_start();
if(isset($_SESSION['Correo']))header("Location: Vistas/Inicio.php");
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$Correo=mysqli_real_escape_string($conexion, $_POST['Correo']);
		$Contra=mysqli_real_escape_string($conexion, $_POST['Password']);
		$auth=mysqli_query($conexion,"SELECT * FROM usuario WHERE correo='$Correo' AND contrasena = sha('$Contra')");

		if(mysqli_num_rows($auth)==1){
			$result=mysqli_fetch_array($auth);
			$_SESSION['Correo']=$Correo;
			$_SESSION['tipo_usuario']=$result['tipo_usuario'];
			$_SESSION['id_usuario']=$result['id_usuario'];
			if($_SESSION['tipo_usuario']==1){
				$usuario = $result['id_usuario'];
				$consulta=mysqli_query($conexion,"SELECT * FROM artista where id_usuario = $usuario");
				$result=mysqli_fetch_array($consulta);
				$_SESSION['artista'] = $result['id_artista'];
				header("Location: Inicio.php");
			}
			if($_SESSION['tipo_usuario']==2){
				$usuario = $result['id_usuario'];
				$consulta=mysqli_query($conexion,"SELECT * FROM fan where id_usuario = $usuario");
				$result=mysqli_fetch_array($consulta);
				$_SESSION['fan'] = $result['id_fan'];
				header("Location: Inicio.php");
			}
			if($_SESSION['tipo_usuario']==3){
				$usuario = $result['id_usuario'];
				header("Location: Moderador.php");
			}
		}else{
			echo "error";
			header("Location: ../Index.php");
		}
	}
	mysqli_close($conexion);
	?>