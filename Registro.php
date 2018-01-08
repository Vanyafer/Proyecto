<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="Diseno.css">
</head>
<body>
<h1 id="titulo">Registrarse</h1>
<div id="Datos">
	<form action="javascript:void(0);" method="get">
		<div id="fila">
			<div id="columna">
					<p>Nombre de usuario:</p>
					<input type="text" name="Usuario" value="Usuario">
					<br>
					<p>Correo:</p>
	                <input type="email" value="Correo" onBlur="if(this.value=='')this.value='Correo'" onFocus="if(this.value=='Correo')this.value='' "> 
	                <br>
	                <p>Contrasena:</p>
	                <input type="password" value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' ">
	                <br>
	                <p>Repita contrasena:</p>
	                <input type="password" value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' ">
	                <br>
			</div>
			<div id="columna">
					<p>Pais:</p>
					<input type="text" name="Pais" value="Pais">
					<br>
					<p>Edad:</p>
					<input type="text" name="Edad" value="Edad">
					<br>
					<p>Tipo de usuario:</p>
					<p><input type="radio" name="TipoU"> Artista </p>
					<p><input type="radio" name="TipoU"> Invitado </p>
			</div>
		</div>
					
	</form>
	
</div>
<input type="submit" value="Aceptar">
</body>
</html>