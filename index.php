<!DOCTYPE html>
<html>
<head>
	<title>Nombre de nuestra pagina</title>
	<link rel="stylesheet" type="text/css" href="css/Diseno.css">
	<script type="text/javascript">

	function Inicio(showhide){
	if(showhide == "show"){
    document.getElementById('Sesion').style.visibility="visible";
	}else if(showhide == "hide"){
    document.getElementById('Sesion').style.visibility="hidden"; 
	}
	}
</script>
</head>
<body>
	<nav id="Barra">
		<a href="javascript:Inicio('show');" id="Inicio">Iniciar Sesion</a>
	    <a href="Registro.php">Registro</a>
	</nav>

	<div id="Sesion">

	        <h1>Iniciar sesion</h1>

	        <fieldset>

	            <form action="index.php" method="POST">

	                <input type="email" name="Correo" value="Correo" onBlur="if(this.value=='')this.value='Correo'" onFocus="if(this.value=='Correo')this.value='' "> 
	                <!--input type="Text" name="Usuario" value="Usuario" onBlur="if(this.value=='')this.value='Usuario'" onFocus="if(this.value=='Usuario')this.value='' "-->
	                <input type="password" name="Password" value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> 
	                <input type="submit" value="Aceptar">
	            </form>
	            	<input type="submit" value="Cerrar" onclick="Inicio('hide');">
	        </fieldset>
	</div>
</body>
</html>
<?php
include("conexion.php");
Session_start();
if(isset($_SESSION['Correo']))header("Location: Inicio.php");
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$Correo=mysqli_real_escape_string($conexion, $_POST['Correo']);
		$Contra=mysqli_real_escape_string($conexion, $_POST['Password']);
		$auth=mysqli_query($conexion,"SELECT * FROM usuario WHERE correo='$Correo' and contrasena='$Contra'");

		if(mysqli_num_rows($auth)==1){;
			$result=mysqli_fetch_array($auth);
			$_SESSION['Correo']=$Correo;
			$_SESSION['tipo_usuario']=$result['tipo_usuario'];
			header("Location: Inicio.php");
		}else{
			echo "<script Language='JavaScript'>document.getElementById('mensaje').innerHTML='Usuario o contraseña incorrecta';</script>";
		}
	}
	mysqli_close($conexion);
	?>