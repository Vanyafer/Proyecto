<!DOCTYPE html>
<html>
<head>
	<title>Inciar sesion</title>

	<link rel="stylesheet" type="text/css" href="Diseno.css">
</head>
<body>
<div id="Sesion">

        <h1>Iniciar sesion</h1>

        <fieldset>

            <form action="javascript:void(0);" method="get">

                <input type="email" value="Correo" onBlur="if(this.value=='')this.value='Correo'" onFocus="if(this.value=='Correo')this.value='' "> <!-- JS because of IE support; better: placeholder="Email" -->

                <input type="password" value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->

                <input type="submit" value="Aceptar">
            </form>

        </fieldset>

    </div>
</body>
</html>