<?php
include("conexion.php");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Configuraciones</title>
	<link rel="stylesheet" type="text/css" href="css/Configuracion.css">
	<link rel="stylesheet" type="text/css" href="css/Popup.css">
	<script src="jscolor/jscolor.js"></script>
	<script src="js/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript">
	function validarContrasena(){
			var Contrasena = document.getElementById("Contrasena").value;
				var Contrasena1 = document.getElementById("Contrasena1").value;
				if(Contrasena.length < 8 || Contrasena.match(/[A-Z]/) == null || Contrasena.match(/[0-9]/) == null){
					document.getElementById('valContra').innerHTML="*La contrase;a debe de tener minimo 8 carateres, un numero y una mayuscula";
				}else{
					document.getElementById('valContra').innerHTML="";
					if(Contrasena1 != Contrasena){
						document.getElementById('valCon').innerHTML='*Las contrasenas no coinciden';
					}else{
						document.getElementById('valCon').innerHTML="";
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
              } else {
              		document.getElementById('valUsuario').innerHTML="";
              	
                }
                       
                }
        });
}

function Aceptar(){

	validarUsuario();
	validarContrasena();
			
	}

</script>
<script type="text/javascript">
	$(document).ready(function(){
	    $(".Close").click(function(){
	        $(".overlay2").fadeOut(400);
	         $(".popup2").fadeOut(400);
	    });
	    $(".Abrir2").click(function(){
	    		validarUsuario();
	    		$(".overlay2").fadeIn(400);
	        	$(".popup2").fadeIn(400);

	    	
	    });
});
</script>
</head>
<body>

<?php 
include "BarraNavegacion.php"; 
$usuario = $_SESSION['id_usuario'];
$consulta=mysqli_query($conexion,"SELECT * FROM usuario where id_usuario = $usuario");
$result=mysqli_fetch_array($consulta);
$nombre = $result['nombre_usuario'];
if($_SESSION['tipo_usuario']==1){
	$consulta=mysqli_query($conexion,"SELECT * FROM artista where id_usuario = $usuario");
$result=mysqli_fetch_array($consulta);
$artista = $result['id_artista'];
$perfil = $result['id_perfil'];
$diseno = $result['id_diseno'];
$consulta1=mysqli_query($conexion,"SELECT * FROM perfil where id_perfil = $perfil");
$result1=mysqli_fetch_array($consulta1);

$consulta2=mysqli_query($conexion,"SELECT * FROM diseno where id_diseno = $diseno");
$result2=mysqli_fetch_array($consulta2);
}if($_SESSION['tipo_usuario']==2){	$consulta=mysqli_query($conexion,"SELECT * FROM fan where id_usuario = $usuario");
	$result=mysqli_fetch_array($consulta);

}

?>
<div class="Configuracion">
<!--form enctype="multipart/form-data" action="Contrasena.php" method="POST"-->
	<div class="General">
							<h1>Configuraciones</h1>
							<p>Nombre de usuario:</p>
								<input type="text" id="Usuario" value="<?php echo $nombre; ?>"></p>
								<br>
							<div class="Columna">
								
			                	<br>
			                	<p>Contrasena:</p>
			                	<input type="password" id="Contrasena" value="<?php echo $nombre; ?>">
			                	<p id="Contra"></p>
			                	<br>
			                	<p>Confirme contrasena:</p>
				                <input type="password" id="Contrasena1" value="contrasena" >
				                <p id="Con"></p>
							</div>
							<div class="Columna">
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
								<input type="date" name="Edad" value="<?php echo $result['fn'];?>">
								<br>
							</div>
			                <br>
			               
	</div>
	<div class="Artista" id="Artista">
		
							<h1>Editar Perfil</h1>
							<div>
								Tecnica de interes:<br>
								<textarea name="Tecnica"><?php echo $result['tecnica_interes'];?></textarea>
							</div>
							<div>
								Metas:<br>
								<textarea name="Metas"><?php echo $result1['metas']; ?></textarea>
							</div>
							<div>
								Estudios:<br>
								<textarea name="Estudios"><?php echo $result1['estudios']; ?></textarea>
							</div>
							<div>
								Tiempo como Artista:<br>
								<textarea name="Exper"><?php echo $result1['exper']; ?></textarea>
							</div>
							<div>
								Algo mas para compartir:<br>
								<textarea name="Otro"><?php echo $result1['otro']; ?></textarea>
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
									 <input class="jscolor" value="<?php echo $result2['color_bordes']; ?>">
									<p>Color Texto:</p>
									 <input class="jscolor" value="<?php echo $result2['color_titulos']; ?>">
								</div>
								<div class="Columna">
									<p>Color de Fondo:</p>
									<input class="jscolor" value="<?php echo $result2['color_fondo']; ?>">
									<p>Color de botones:</p>
									<input class="jscolor" value="<?php echo $result2['color_botones']; ?>">

								</div>		

						<a class="Abrir2 boton">Aceptar</a>
	</div>
	<div class="Fan" id="Fan">
						<p>Informacion de contacto</p>
						<textarea name="DatosFan"><?php echo $result['informacion_contacto']; ?>
						</textarea>
						<p>Perfil:</p>
						<textarea name="PerfilFan"><?php echo $result['perfil']; ?></textarea>
						<p>Foto de perfil:</p>
						<input type="file" name="perfil">
						<br>
						<input type="submit" name="subir" value="Aceptar">
						
	</div>
	<div class="overlay2">
		<div class="popup2">
				<div class="Pop">
					<h1>Confirmar contraseña actual</h1>
					<fieldset>
							<input type="password" name="submit" value="contrasena">
							<input type="submit" name="Aceptar" value="Subir">
						</form>
						<input type="submit" value="Cerrar" class="Close">
					</fieldset>
				</div>
		
		</div>
	</div>

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