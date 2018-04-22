<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/foundation/5.0.2/css/foundation.css">
  <link rel="stylesheet" type="text/css" href="css/forotest.css">
  <script type="text/javascript" scr="js/jquery.min.js"></script>
  <script type="text/javascript" src="forotest.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
      $(".Closeforo").click(function(){
          $(".overlayforo").fadeOut(400);
           $(".popupforo").fadeOut(400);
      });
      $(".Abrirforo").click(function(){
          $(".overlayforo").fadeIn(400);
          $(".popupforo").fadeIn(400);
      });
});
</script>
</head>
<body>
<?php
include "BarraNavegacion.php";
//howthefuck do i get forohilo 
$forohilo=$_POST['id_forohilo'];
$consulta=mysqli_query($conexion,"SELECT * FROM foro_hilo where id_forohilo = $forohilo");
$result=mysqli_fetch_array($consulta);
$cont = $result['contenido'];
$fecha = $result['fecha'];
$titulo = $result['titulo'];
$usuario = $result['id_usuario'];
$consulta3=mysqli_query($conexion,"SELECT imagen_perfil FROM artista where id_usuario = $usuario");
$consulta4=mysqli_query($conexion,"SELECT nombre_usuario FROM usuario WHERE id_usuario = $usuario");
$result4=mysqli_fetch_array($consulta4);
$nombusu = $result4['nombre_usuario'];
?>
  <header id="#top">
    <div class="row">
      <div class="large-4 column lpad">
        <div class="logo">
          <span>Foro de discusión</span>
        </div>
      </div>
      <div class="large-8 column ar lpad">  
      </div>
    </div>
  </header>
  
  <a href="#top" id="top-button">
    <i class="icon-angle-up"></i>
  </a>

  <div class="row mt">
    <div class="large-12">
      <div class="large-12 forum-category rounded top">
        <div class="large-8 small-10 column lpad">
          <?php
            echo $titulo;
          ?>
        </div>
      </div>
      
      <div class="toggleview">
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <?php
              $consulta2=mysqli_query($conexion,"SELECT imagen_perfil artista where id_usuario = $usuario");
              ///falta
            ?>
            <i class="icon-file"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
             <?php  echo $cont; ?>
            </span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span><?php echo $fecha;?></span>
            <span>por <a href=""><?php echo $nombusu; ?> </a></span>
          </div>
        </div>
        

        <?php
          $consulta2=mysqli_query($conexion,"SELECT * FROM foro_respuesta where id_forohilo = $id_forohilo order by id_fororespuesta desc");
          while ($result2 = mysqli_fetch_array($consulta2)) {
            $resp = $result2['id_fororespuesta'];
            $fecha2 = $result2['fecha'];
            $cont2 = $result2['contenido'];
            $usuario2 = $result2['id_usuario'];
            $consulta21=mysqli_query($conexion,"SELECT nombre_usuario FROM usuario WHERE id_usuario = $usuario2");
            $result21=mysqli_fetch_array($consulta21);
            $nombusu2=$result21['nombre_usuario'];
              echo"<div class='large-12 forum-topic'>
                    <div class='large-1 column lpad'>
                      <i class='icon-file'></i>
                    </div>
                    <div class='large-7 small-8 column lpad'>
                      <span class='overflow-control'>".$cont2."</span>
                    </div>
                    <div class='large-2 small-4 column pad'>
                      <span>".$fecha2."</span>
                      <span><a>".$nombusu2."</a></span>
                    </div>
                  </div>
              ";          
          }

        ?>
      </div>
    </div>
  </div>

</body>
</html>