<?php
session_start();
if(!isset($_SESSION['Correo']))header("Location: index.php");
		if($_SESSION['tipo_usuario']==1){
				header("Location: Perfil1.php");

			}
			if($_SESSION['tipo_usuario']==2){
				header("Location: PerfilInvitado.php");
			}
?>