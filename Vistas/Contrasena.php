<script type="text/javascript">
	function ValidarContra(){
			$.ajax({
					 			type:  "POST", //método de envio
				                data: $("#contrasena").serialize(), //datos que se envian a traves de ajax
				                url:   "ValidarContra.php", //archivo que recibe la peticion
				                success: function(res) { //una vez que el archivo recibe el request lo procesa y lo devuelve
				                if(res == 0){

				                   document.getElementById('valContraActual').innerHTML='La contrasena no coinciden';

								}else{
										document.getElementById('valContraActual').innerHTML="";
								} 
				                }
				        });
	}
</script>
<div class="Pop">
	<h1>Confirmar contraseña actual</h1>
	<fieldset>
		<form onsubmit="ValidarContra();">
			<input type="password" name="contra" id="contra" value="contrasena">
			<p id="valContraActual"></p>
			<input type="submit" name="Aceptar" value="Aceptar">
		</form>
		<input type="submit" value="Cerrar" class="Close">
	</fieldset>
</div>