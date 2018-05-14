<?php 
include "Conexion.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
session_start();
  $usuario = $_POST['Usuario'];
  $correo = $_POST['Correo'];
  $contrasena = $_POST['Contrasena'];
  $Tipo = $_POST['TipoU'];
  $Edad = $_POST['Edad'];
  $Pais = $_POST['Pais'];


 mysqli_query($conexion,"INSERT into usuario VALUES(NULL,sha('$contrasena'),'$correo','$usuario',0,$Tipo)");

  $consulta=mysqli_query($conexion,"SELECT MAX(id_usuario) as id FROM usuario");
  $result=mysqli_fetch_array($consulta);
  $id = $result['id'];
  if(isset($_FILES['image'])){
      $folder="./imgPerfil/";
      $tmp_name = $_FILES["image"]["tmp_name"];
      move_uploaded_file( $tmp_name,"$folder".$_FILES["image"]["name"]);
        $foto = "$folder".$_FILES["image"]["name"];
    }else{
      $foto = "null";
    }
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

    mysqli_query($conexion,"INSERT into diseno VALUES(NULL,NULL,'$Bordes','$Texto','$Botones','$Fondo',$Diseno)");
    $consultaDiseno=mysqli_query($conexion,"SELECT MAX(id_diseno) as id FROM diseno");
    $resultDiseno=mysqli_fetch_array($consultaDiseno);
    $id_diseno = $resultDiseno['id'];

    mysqli_query($conexion,"INSERT into portafolio VALUES(NULL,NULL)");
    $consultaPortafolio=mysqli_query($conexion,"SELECT MAX(id_portafolio) as id FROM portafolio");
    $resultPortafolio=mysqli_fetch_array($consultaPortafolio);
    $id_portafolio = $resultPortafolio['id'];
    
    mysqli_query($conexion,"INSERT into perfil VALUES(NULL,'$Metas','$Exper','$Otro','$Estudios')");
    $consultaPerfil=mysqli_query($conexion,"SELECT MAX(id_perfil) as id FROM perfil");
    $resultPerfil=mysqli_fetch_array($consultaPerfil);
    $id_perfil = $resultPerfil['id'];

    mysqli_query($conexion,"INSERT into artista VALUES(NULL,$Edad,'$foto','$informacion','$tecnica',$Pais,$id,$id_diseno,$id_portafolio,$id_perfil)");
    $consultaArtista=mysqli_query($conexion,"SELECT MAX(id_perfil) as id FROM artista");
    $resultArtista=mysqli_fetch_array($consultaArtista);
     $_SESSION['artista'] = $resultArtista['id_artista'];
  }else{
   
    $DatosFan = $_POST['DatosFan'];
    $Perfil = $_POST['Perfil'];
    mysqli_query($conexion,"INSERT into fan VALUES(NULL,$Edad,'$foto','$DatosFan','$PerfilFan',$Pais,$id)");
    $consultaFan=mysqli_query($conexion,"SELECT MAX(id_perfil) as id FROM fan");
    $resultFan=mysqli_fetch_array($consultaFan);
    $_SESSION['fan'] = $resultFan['id_fan'];
  
      
  }
      $_SESSION['Correo']=$Correo;
      $_SESSION['tipo_usuario']=$Tipo;
      $_SESSION['id_usuario']=$id;
      
      header("Location: Inicio.php");
  
}
 ?>