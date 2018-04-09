<?php 
include("conexion.php");

?>
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
					document.getElementById('valContra').innerHTML="*La contrase;a debe de tener minimo 8 carateres, un numero y una mayuscula"
					return false;
				}else{
					document.getElementById('valContra').innerHTML="";
					if(Contrasena1 != Contrasena){
						document.getElementById('valCon').innerHTML='*Las contrasenas no coinciden';
						return false;
					}else{
						document.getElementById('valCon').innerHTML="";
						return true;
					}
				}

}
function validarUsuario(){

	$.ajax({
	 			type:  "POST", //método de envio
                data: $("#formdata").serialize(), //datos que se envian a traves de ajax
                url:   "ValidarU.php", //archivo que recibe la peticion
                success: function(res) { //una vez que el archivo recibe el request lo procesa y lo devuelve

                if(res == 0){
                    document.getElementById('valUsuario').innerHTML="Este nombre de usuario ya existe";
                    return false;
              } else {
              		document.getElementById('valUsuario').innerHTML="";
              		return true;     
                }
                       
                }
        });
}
function validarCorreo(){
	
	 $.ajax({
	 			type:  "POST", //método de envio
                data: $("#formdata").serialize(), //datos que se envian a traves de ajax
                url:   "Validar.php", //archivo que recibe la peticion
                success: function(res) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                if(res == 0){

                    document.getElementById('valCorreo').innerHTML="Este correo ya esta registrado";
                    return false;
              } else {
              		document.getElementById('valCorreo').innerHTML="";
              		return true;     
                }
                       
                }
        });
}
function Aceptar(){
	if(validarCorreo() & validarUsuario() & validarContrasena()){
		alert("hola");
		document.getElementById('Fila').style.display="none";
				if($('input:radio[name=TipoU]:checked').val() == 'A'){
					document.getElementById('Artista').style.visibility="visible";
					
				}
				else{
					document.getElementById('Fan').style.visibility="visible";
				}
		
	}
		
	}
	</script>
</head>
<body>
	<h1 id="titulo">Registrarse<hr style="color: #1c83a8;"></h1>

	<div id="Datos">
	 	<form onSubmit="Aceptar(); return false" id="formdata">
				<div id="Fila">
					<div id="Columna">
							<p>Nombre de usuario:</p>
							<input type="text" id="Usuario" name="Usuario" value="Usuario" onBlur="if(this.value=='')this.value='Usuario'" onFocus="if(this.value=='Usuario')this.value='' ">
							<p id="valUsuario"></p>
							<br>
							<p>Correo:</p>
			                <input type="email" id="Correo"value="Correo" name="Correo" onBlur="if(this.value=='')this.value='Correo'" onFocus="if(this.value=='Correo')this.value='' ">
			                <p id="valCorreo"></p> 
			                <br>
			                <p>Contrasena:</p>
			                <input type="password" id="Contrasena" name="Contrasena" value="Contrasena" onBlur="if(this.value=='')this.value='Contrasena'" onFocus="if(this.value=='Contrasena')this.value='' ">
			                <p id="valContra"></p>
			                <br>
			                <p>Confirme contrasena:</p>
			                <input type="password" id="Contrasena1" value="Contrasena" onBlur="if(this.value=='')this.value='Contrasena'" onFocus="if(this.value=='Contrasena')this.value='' ">
			                <p id="valCon"></p>
			                <br>

					</div>
					<div id="Columna">
							<p>Pais:</p>
							<select name="Pais">
		       					<?php
								$consulta = mysqli_query($conexion,"SELECT * FROM pais");
          							while ($valores = mysqli_fetch_array($consulta)) {
												
           							echo "<option value=".$valores['id_pais'].">".$valores['nombre_pais']."</option>";
													
          								}
        						?>
	
		          							

			
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
			<br>
			<input type="submit" value="siguiente">
					</div>
								                
		
			</form>
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
						<input type="submit" value="Aceptar" class="Aceptar" onclick="Aceptar();">
						<br>
			</div>
	</div>		
		

</body>
</html>