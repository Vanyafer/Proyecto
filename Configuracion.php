<?php
include("conexion.php");

session_start();
if(!isset($_SESSION['Correo']))header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Configuraciones</title>
	<link rel="stylesheet" type="text/css" href="css/Configuracion.css">
	<script src="jscolor/jscolor.js"></script>
	<script src="js/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php include "BarraNavegacion.php"; ?>
<div class="Configuracion">
	<div class="General">
							<h1>Configuraciones</h1>
							<p>Nombre de usuario:</p>
								<input type="text" id="Usuario" value="Usuario" onBlur="if(this.value=='')this.value='Usuario'" onFocus="if(this.value=='Usuario')this.value='' ">
								<br>
							<div class="Columna">
								
			                	<br>
			                	<p>Contrasena:</p>
			                	<input type="password" id="Contrasena" value="Contrasena" onBlur="if(this.value=='')this.value='Contrasena'" onFocus="if(this.value=='Contrasena')this.value='' ">
			                	<p id="Contra"></p>
			                	<br>
			                	<p>Confirme contrasena:</p>
				                <input type="password" id="Contrasena1" value="Contrasena" onBlur="if(this.value=='')this.value='Contrasena'" onFocus="if(this.value=='Contrasena')this.value='' ">
				                <p id="Con"></p>
							</div>
							<div class="Columna">
								<p>Pais:</p>
								<select name="Pais">
			       				</select>
								<br>
								<p>Fecha de nacimiento:</p>
								<input type="date" name="Edad" value="Edad">
								<br>
							</div>
			                <br>
			               
	</div>
	<div class="Artista" id="Artista">
		
							<h1>Editar Perfil</h1>
							<div>
								Tecnica de interes:<br>
								<textarea name="Tecnica"></textarea>
							</div>
							<div>
								Metas:<br>
								<textarea name="Metas"></textarea>
							</div>
							<div>
								Estudios:<br>
								<textarea name="Estudios"></textarea>
							</div>
							<div>
								Tiempo como Artista:<br>
								<textarea name="Exper"></textarea>
							</div>
							<div>
								Algo mas para compartir:<br>
								<textarea name="Otro"></textarea>
							</div>
							<div class="Columna">
								<p>Foto de perfil:</p>
								<input type="file" name="perfil">
							</div>
							<div class="Columna">
								<p>Foto de fondo:</p>
								<input type="file" name="perfil">
							</div>
							<h3>Escoge un diseño</h3>
							<img src="imagenes/Perfil1.jpg"><input type="radio" name="Diseno">
							<img src="imagenes/Perfil2.jpg"><input type="radio" name="Diseno">
							<img src="imagenes/Perfil3.jpg"><input type="radio" name="Diseno">	
							<h3>Paleta de colores:</h3>
							<div><input type="radio" name="TipoP"> Blanco/Negro <br>
							<input type="radio" name="TipoP"> Frio <br>
							<input type="radio" name="TipoP"> Calido <br>
							<input type="radio" name="TipoP"> Personalizado </div>	
							<div class="Columna">
									<p>Color de Bordes:</p>
									 <input class="jscolor" value="1c83a8">
									<p>Color Texto:</p>
									 <input class="jscolor" value="1c83a8">
								</div>
								<div class="Columna">
									<p>Color de Fondo:</p>
									<input class="jscolor" value="1c83a8">
									<p>Color de botones:</p>
									<input class="jscolor" value="1c83a8">
								</div>		
	</div>
	<div class="Fan" id="Fan">
						<p>Informacion de contacto</p>
						<textarea name="DatosFan">
							
						</textarea>
						<p>Perfil:</p>
						<textarea name="PerfilFan">
							
						</textarea>
						<p>Foto de perfil:</p>
						<input type="file" name="perfil">
						<br>
						
	</div>
</body>
</html>
	<?php
			if($_SESSION['tipo_usuario']==1){
				echo "<script Language='JavaScript'>
				document.getElementById('Artista').style.display='block';
				document.getElementById('Fan').style.display = 'none';
				</script>";

			}
			if($_SESSION['tipo_usuario']==2){
				echo "<script Language='JavaScript'>
				document.getElementById('Artista').style.display = 'none';
				document.getElementById('Fan').style.display = 'block';
				</script>";
			}
	?>