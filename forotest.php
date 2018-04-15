<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/foundation/5.0.2/css/foundation.css">
  <link rel="stylesheet" type="text/css" href="css/forotest.css">
  <link rel="stylesheet" type="text/css" href="css/Popupforo.css">
  <script type="text/javascript" scr="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
<?php include "BarraNavegacion.php"; ?>
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
          Favoritos
        </div>
      </div>
      
      <div class="toggleview">
        <div class="large-12 forum-head">
          <div class="large-8 small-8 column lpad">
            Hilo
          </div>
          <div class="large-1 column lpad">
            Vistas
          </div>
          <div class="large-1 column lpad">
            Respuestas
          </div>
          <div class="large-2 small-4 column lpad">
            Autor
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-file"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">Title of the title</a>
            </span>
            <span class="overflow-control">
              Description of the title of the topic(?)
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">96587</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">678</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-tablet"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">Oops.. Foundation is supposed to be responsive</a>
            </span>
            <span class="overflow-control">
              But it's not (yet) working here
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">25</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">2523</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-ellipsis-horizontal"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">text-overflow: ellipsis;</a>
            </span>
            <span class="overflow-control">
              You can type as many things as you want but the text will be shorter than bla bla bla
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">355</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">215</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-bug"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">If you find any bugs is this pen...</a>
            </span>
            <span class="overflow-control">
              ... please tell me in the comments :)
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">255</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">285</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-lock"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">[Locked] Some other topic</a>
            </span>
            <span class="overflow-control">
              This topic is locked by someone
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">95</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">234</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  <div class="row mt mb">
    <div class="large-12">
      <div class="large-12 forum-category rounded top">
        <div class="large-8 small-10 column lpad">
          Ideas
        </div>
        <div class="large-4 small-2 column lpad ar">
          <a class="Abrirforo">Crear nuevo hilo</a>
        </div>
      </div>
      
      <div class="toggleview">
        <div class="large-12 forum-head">
          <div class="large-8 small-8 column lpad">
            Hilo
          </div>
          <div class="large-1 column lpad">
            Vistas
          </div>
          <div class="large-1 column lpad">
            Respuestas
          </div>
          <div class="large-2 small-4 column lpad">
            Autor
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-file"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">Title of the title</a>
            </span>
            <span class="overflow-control">
              Description of the title of the topic(?)
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">96587</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">678</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-tablet"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">Oops.. Foundation is supposed to be responsive</a>
            </span>
            <span class="overflow-control">
              But it's not (yet) working here
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">25</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">2523</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-ellipsis-horizontal"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">text-overflow: ellipsis;</a>
            </span>
            <span class="overflow-control">
              You can type as many things as you want but the text will be shorter
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">355</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">215</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-bug"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">If you find any bugs is this pen...</a>
            </span>
            <span class="overflow-control">
              ... please tell me in the comments :)
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">255</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">285</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-lock"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">[Locked] Some other topic</a>
            </span>
            <span class="overflow-control">
              This topic is locked by someone
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">95</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">234</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href=""#>Some user</a></span>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="row mt mb" id="Objetos">
    <div class="large-12">
      <div class="large-12 forum-category rounded top">
        <div class="large-8 small-10 column lpad">
          Objetos
        </div>
        <div class="large-4 small-2 column lpad ar">
          <a class="Abrirforo">Crear nuevo hilo</a>
        </div>
      </div>
      
      <div class="toggleview">
        <div class="large-12 forum-head">
          <div class="large-8 small-8 column lpad">
            Hilo
          </div>
          <div class="large-1 column lpad">
            Vistas
          </div>
          <div class="large-1 column lpad">
            Respuestas
          </div>
          <div class="large-2 small-4 column lpad">
            Autor
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-file"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">Title of the title</a>
            </span>
            <span class="overflow-control">
              Description of the title of the topic(?)
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">96587</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">678</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-tablet"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">Oops.. Foundation is supposed to be responsive</a>
            </span>
            <span class="overflow-control">
              But it's not (yet) working here
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">25</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">2523</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-ellipsis-horizontal"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">text-overflow: ellipsis;</a>
            </span>
            <span class="overflow-control">
              You can type as many things as you want but the text will be shorter
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">355</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">215</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-bug"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">If you find any bugs is this pen...</a>
            </span>
            <span class="overflow-control">
              ... please tell me in the comments :)
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">255</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">285</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
        <div class="large-12 forum-topic">
          <div class="large-1 column lpad">
            <i class="icon-lock"></i>
          </div>
          <div class="large-7 small-8 column lpad">
            <span class="overflow-control">
              <a href="#">[Locked] Some other topic</a>
            </span>
            <span class="overflow-control">
              This topic is locked by someone
            </span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">95</span>
          </div>
          <div class="large-1 column lpad">
            <span class="center">234</span>
          </div>
          <div class="large-2 small-4 column pad">
            <span>
              <a href="#">Some sub-topic</a>
            </span>
            <span>08-29-2013 7:29PM</span>
            <span>by <a href="#">Some user</a></span>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="overlay1">
    <div class="popup1">
      <?php include "Publicarforo.php"; ?>
    </div>
  </div>

</body>
</html>


<?php
      if($_SESSION['tipo_usuario']==1){
        echo "<script Language='JavaScript'>
        document.getElementById('Objetos').style.visibility='visible';
        </script>";
      }
      if($_SESSION['tipo_usuario']==2){
        echo "<script Language='JavaScript'>document.getElementById('Objetos').style.display='none';</script>";
      }
  ?>
