<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/Diseno.css">
	<script src="jscolor/jscolor.js"></script>
	<script src="js/jquery.min.js"></script>
</head>
<body>
<h1 id="titulo">Registrarse</h1>
<hr style="color: #1c83a8;">
<div id="Datos">
		<div id="Fila">
			<div id="Columna">
					<p>Nombre de usuario:</p>
					<input type="text" name="Usuario" value="Usuario" onBlur="if(this.value=='')this.value='Usuario'" onFocus="if(this.value=='Usuario')this.value='' ">
					<br>
					<p>Correo:</p>
	                <input type="email" value="Correo" onBlur="if(this.value=='')this.value='Correo'" onFocus="if(this.value=='Correo')this.value='' "> 
	                <br>
	                <p>Contrasena:</p>
	                <input type="password" value="Contrasena" onBlur="if(this.value=='')this.value='Contrasena'" onFocus="if(this.value=='Contrasena')this.value='' ">
	                <br>
	                <p>Confirme contrasena:</p>
	                <input type="password" value="Contrasena" onBlur="if(this.value=='')this.value='Contrasena'" onFocus="if(this.value=='Contrasena')this.value='' ">
	                <br>
			</div>
			<div id="Columna">
					<p>Pais:</p>
					<input type="text" name="Pais" value="Pais">
					<br>
					<p>Fecha de nacimiento:</p>
					<input type="date" name="Edad" value="Edad">
					<br>
					<p>Tipo de usuario:</p>
					<p><input type="radio" name="TipoU" value="A"> Artista </p>
					<p><input type="radio" name="TipoU" value="F"> Fan </p>
			</div>
		</div>
		<br>
		<div id="Artista">
			<div id="Fila">
				<div id="Columna">
					<p>
						Tecnica de interes:<br>
						<textarea name="Tecnica"></textarea>
					</p>
					<p>
						Metas:<br>
						<textarea name="Metas"></textarea>
					</p>
					<p>
						Estudios:<br>
						<textarea name="Estudios"></textarea>
					</p>
						<p>Tiempo como Artista:<br>
						<textarea name="Exper"></textarea>
					</p>
					<p>
						Algo mas para compartir:<br>
						<input type="text" name="otro">
					</p>
				</div>
				<div id="Columna">
					<p>Foto de perfil:</p>
					<input type="file" name="perfil">
					<h3>Paleta de colores:</h3>
					<p><input type="radio" name="TipoP"> Blanco/Negro <br>
					<input type="radio" name="TipoP"> Frio <br>
					<input type="radio" name="TipoP"> Calido <br>
					<input type="radio" name="TipoP"> Personalizado </p>
					<div id="Fila">
						<div id="Columna2">
							<p>Color de Bordes:</p>
							 <input class="jscolor" value="1c83a8">
							<p>Color Texto:</p>
							 <input class="jscolor" value="1c83a8">
						</div>
						<div id="Columna2">
							<p>Color de Fondo:</p>
							<input class="jscolor" value="1c83a8">
							<p>Color de botones:</p>
							<input class="jscolor" value="1c83a8">
						</div>
					</div>
				</div>
			</div>
		</div>
	<div id="Fan">
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
	</div>		
	
<script type="text/javascript">
	$(document).ready(function(){
		
		$("input:radio[name=TipoU]").click(function () {	 
			if($('input:radio[name=TipoU]:checked').val() == 'A'){
				document.getElementById('Artista').style.visibility="visible";
				document.getElementById('Fan').style.visibility="hidden";
			}
			else{
				document.getElementById('Artista').style.visibility="hidden";
				document.getElementById('Fan').style.visibility="visible";
			}
		});
	});
</script>
</body>
</html>