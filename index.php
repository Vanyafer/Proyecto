<!DOCTYPE html>
<html>
<head>
	<title>Nombre de nuestra pagina</title>
	<link rel="stylesheet" type="text/css" href="Diseno.css">
	<script type="text/javascript">

	function Inicio(showhide){
	if(showhide == "show"){
    document.getElementById('Sesion').style.visibility="visible";

    document.getElementById('Sesion').style.visibility="visible";
	}else if(showhide == "hide"){
    document.getElementById('Sesion').style.visibility="hidden"; 
	}
	}
</script>
</head>
<body>
	<div id="Barra">
		<a href="javascript:Inicio('show');" id="Inicio">Iniciar Sesion</a>
	    <a href="Registro.php">Registro</a>
	</div>

	<div id="Sesion">

	        <h1>Iniciar sesion</h1>

	        <fieldset>

	            <form action="javascript:void(0);" method="get">

	                <input type="email" value="Correo" onBlur="if(this.value=='')this.value='Correo'" onFocus="if(this.value=='Correo')this.value='' "> 

	                <input type="password" value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> 
	                <input type="submit" value="Aceptar">
	            </form>
	            	<input type="submit" value="Cerrar" onclick="Inicio('hide');">
	        </fieldset>
	</div>
</body>
</html>