<?php 
include "conexion.php";
if($_SERVER['REQUEST_METHOD']=='POST'){

  $usuario = $_POST['Usuario'];
  $correo = $_POST['Correo'];
  $contrasena = $_POST['Contrasena'];
  $Tipo = $_POST['TipoU'];
  $Edad = $_POST['Edad'];
  $Pais = $_POST['Pais'];


 // if(!mysqli_query($conexion,"INSERT into usuario VALUES(NULL,sha('$contrasena'),'$correo','$usuario',0,$Tipo)")) echo "error";

  $consulta=mysqli_query($conexion,"SELECT MAX(id_usuario) as id FROM usuario");
  $result=mysqli_fetch_array($consulta);
  $id = $result['id'];

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
    if(isset($_FILES['image'])){
      $folder="./imgPerfil/";
      $tmp_name = $_FILES["image"]["tmp_name"];
      move_uploaded_file( $tmp_name,"$folder".$_FILES["image"]["name"]);
        $foto = "$folder".$_FILES["image"]["name"];
    }else{
      $foto = "null";
    }
    

      echo $Diseno."<br>";

    mysqli_query($conexion,"INSERT into diseno VALUES(NULL,NULL,'$Bordes','$Texto','$Botones','$Fondo',$Diseno)");
    $consultaDiseno=mysqli_query($conexion,"SELECT MAX(id_diseno) as id FROM diseno");
    $resultDiseno=mysqli_fetch_array($consultaDiseno);
    $id_diseno = $resultDiseno['id_diseno'];

    mysqli_query($conexion,"INSERT into portafolio VALUES(NULL,NULL)");
    $consultaPortafolio=mysqli_query($conexion,"SELECT MAX(id_portafolio) as id FROM portafolio");
    $resultDiseno=mysqli_fetch_array($consultaPortafolio);
    $id_portafolio = $resultPortafolio['id_diseno'];
    
    mysqli_query($conexion,"INSERT into perfil VALUES(NULL,'$Metas','$Exper','$Otro','$Estudios')");
    $consultaPerfil=mysqli_query($conexion,"SELECT MAX(id_perfil) as id FROM perfil");
    $resultPerfil=mysqli_fetch_array($consultaPerfil);
    $id_perfil = $resultPerfil['id_perfil'];
    mysqli_query($conexion,"INSERT into artista VALUES(NULL,$Edad,'$foto','$informacion',''$tecnica',$Pais,$id,$id_diseno,$id_portafolio,$id_perfil)");
  }else{
     if(isset($_FILES['image'])){
      $folder="./imgPerfil/";
      $tmp_name = $_FILES["image"]["tmp_name"];
      move_uploaded_file( $tmp_name,"$folder".$_FILES["image"]["name"]);
        $foto = "$folder".$_FILES["image"]["name"];
    }else{
      $foto = "null";
    }
    $DatosFan = $_POST['DatosFan'];
    $Perfil = $_POST['Perfil'];
    mysqli_query($conexion,"INSERT into fan VALUES(NULL,$Edad,'$foto','$DatosFan',''$Perfil',$Pais,$id)");
  }

}
 ?>