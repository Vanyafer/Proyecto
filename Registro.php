
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/Diseno.css">
	<script src="jscolor/jscolor.js"></script>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">
			function validarContrasena(){
				var Contrasena = document.getElementById("Contrasena").value;
				var Contrasena1 = document.getElementById("Contrasena1").value;
				if(Contrasena.length < 8 || Contrasena.match(/[A-Z]/) == null || Contrasena.match(/[0-9]/) == null){
					document.getElementById('Contra').innerHTML="*La contrase;a debe de tener minimo 8 carateres, un numero y una mayuscula"
				}else{
					document.getElementById('Contra').innerHTML="";
					if(Contrasena1 != Contrasena){
						document.getElementById('Con').innerHTML='*Las contrasenas no coinciden';
					}else{
						document.getElementById('Con').innerHTML="";
						return true;
					}
				}

			
			}
			function validarCorreo(){
			var Correo = document.getElementById("Correo").value;
			var correcto =  "/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i";
				if(Correo.search(correcto)!=0){
					document.getElementById('valCorreo').innerHTML="*Favor de escribir un correo valido";
				}else{
					document.getElementById('valCorreo').innerHTML="";
					return true;
				}
			}
			function Aceptar(){
			var Usuario = document.getElementById("Usuario").value;
			if(validarContrasena() == true && validarCorreo() == true){
				
			}
			
	}
	</script>
</head>
<body>
<h1 id="titulo">Registrarse<hr style="color: #1c83a8;"></h1>

	<div id="Datos">
		<form action="Registro.php" method="POST">
			<div id="Fila">
					<div id="Columna">
							<p>Nombre de usuario:</p>
							<input type="text" id="Usuario" value="Usuario" onBlur="if(this.value=='')this.value='Usuario'" onFocus="if(this.value=='Usuario')this.value='' ">
							<br>
							<p>Correo:</p>
			                <input type="email" id="Correo" value="Correo" onBlur="if(this.value=='')this.value='Correo'" onFocus="if(this.value=='Correo')this.value='' ">
			                <p id="valCorreo"></p> 
			                <br>
			                <p>Contrasena:</p>
			                <input type="password" id="Contrasena" value="Contrasena" onBlur="if(this.value=='')this.value='Contrasena'" onFocus="if(this.value=='Contrasena')this.value='' ">
			                <p id="Contra"></p>
			                <br>
			                <p>Confirme contrasena:</p>
			                <input type="password" id="Contrasena1" value="Contrasena" onBlur="if(this.value=='')this.value='Contrasena'" onFocus="if(this.value=='Contrasena')this.value='' ">
			                <p id="Con"></p>
			                <br>
					</div>
					<div id="Columna">
							<p>Pais:</p>
							<select name="Pais">
		       					
		          							

			
									</select>
							<br>
							<p>Fecha de nacimiento:</p>
							<input type="date" name="Edad" value="Edad">
							<br>
							<p>Tipo de usuario:</p>
							<p><input type="radio" name="TipoU" value="A"> Artista </p>
							<p><input type="radio" name="TipoU" value="F"> Fan </p>
							<br>
							<p> <input type="checkbox" name="Terminos"> Acepto <a href="">Terminos y condiciones </a></p>
							<p id="Terminos"></p>
							<input type="submit" value="Aceptar" onclick="Aceptar();">
			<br>
					</div>
				</div>

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
								<textarea name="Otro"></textarea>
							</p>
								<p>Foto de perfil:</p>
								<input type="file" name="perfil">
						</div>
						<div id="Columna">
							<h3>Escoge un diseño</h3>
							<img src="imagenes/Perfil1.jpg"><input type="radio" name="Diseno">
							<img src="imagenes/Perfil2.jpg"><input type="radio" name="Diseno">
							<img src="imagenes/Perfil3.jpg"><input type="radio" name="Diseno">
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
						<input type="submit" value="Aceptar" onclick="Aceptar();">
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
						<input type="submit" value="Aceptar" onclick="Aceptar();">
						<br>
					</div>
		</form>
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