<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){
session_start();
  $usuario = $_POST['Usuario'];
  $contrasena = $_POST['Contrasena'];
  $Edad = $_POST['Edad'];
  $Pais = $_POST['Pais'];
if($Tipo == '1'){
    $informacion = $_POST['InformacionA'];
    $tecnica = $_POST['Tecnica'];
    $Metas = $_POST['Metas'];
    $Estudios = $_POST['Estudios'];
    $Exper = $_POST['Exper'];
    $Otro = $_POST['Otro'];
    $Botones = $_POST['Botones'];
    $Texto = $_POST['Texto'];
    $Bordes = $_POST['Bordes'];
    $Fondo = $_POST['Fondo'];
    $Diseno = $_POST['Diseno'];

	$usuario = $_SESSION['id_usuario'];
	$consulta=mysqli_query($conexion,"SELECT * FROM artista where id_usuario = $usuario");
	$result=mysqli_fetch_array($consulta);
	$diseno = $result['id_diseno'];
	$perfil = $result['id_perfil'];


	 mysqli_query($conexion,"UPDATE diseno SET color_bordes ='$Bordes', color_texto = '$Texto', color_botones'$Botones', color_fondo = '$Fondo', tipo_perfil = $Diseno  WHERE id_diseno = $diseno");
   
    
    mysqli_query($conexion,"UPDATE perfil SET metas ='$Metas', exper = '$Exper', otro = '$Otro', estudios ='$Estudios' WHERE id_perfil = $perfil");
  

    mysqli_query($conexion,"UPDATE artista SET fn = $Edad, informacion = '$informacion', tecnica = '$tecnica', pais = $Pais where id_usuario = $usuario");
}else{
   
    $DatosFan = $_POST['DatosFan'];
    $Perfil = $_POST['Perfil'];

    $usuario = $_SESSION['id_usuario'];
	$consulta=mysqli_query($conexion,"SELECT * FROM fan where id_usuario = $usuario");
	$result=mysqli_fetch_array($consulta);

	mysqli_query($conexion,"UPDATE fan SET fn = $Edad, informacion_contacto = '$DatosFan',perfil = '$perfil', pais = $Pais where id_usuario = $usuario");

}
}
?>