<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/jquery.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript">
$('#grid2 img').each(function(){
    var $this = $(this); 
    $this.wrap('<div class="item"><a></a></div>');
    $('a').removeAttr('href');  
});
$('#grid2').addClass('effect-2');

$(window).load(function(){
  var $container = $('.grid');
  // initialize
  $container.masonry({
    //columnWidth: 200,
    itemSelector: '.item'
  })
  $('.item > a').removeAttr('href');
});
	</script>
	<style type="text/css">
		*, *:after, *:before { 
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box; 
          box-sizing: border-box;
}
body, html {
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  padding: 0;
  margin: 0;
}
.clearfix:before, .clearfix:after { content: " "; display: table; }
.clearfix:after { clear: both; }
body {
  font-family: 'Open Sans', sans-serif;
	color: #6b7381;
	background: #f2f2f2;
}
a {
	color: #aaa;
	text-decoration: none;
}
a:hover,a:active {color: #333;}
h2 {
  color: #4E88AE;
  font-weight: 400;
  text-align: center;
}
img {
  border: 0;
  display: block;
  width: 100%;
}
.entry {
  background: #FFF;
  border: 1px solid rgba(0,0,0,.15);
  box-shadow: -10px 10px 10px -10px rgba(0,0,0,.35), -10px 10px 0 -3px rgba(0,0,0,.2);
  margin: 10px auto 20px;
  max-width: 800px;
  overflow: hidden;
  padding: 20px 40px;
  position: relative;
  text-align: center;
}
.entry > p {
  padding: 20px 0 10px;
}
.entry > .grid {
  margin: 20px auto 0px;
}
.entry > .grid > .item {
  width: 50%;
}
.grid {
	max-width: 69em;
	list-style: none;
	margin: 30px auto;
	padding: 1;
}
.grid .item {
	display: block;
	float: left;
	padding: 2px;
	width: 33%;
	opacity: 1;
}
.grid .item a,.grid .item img {
	outline: none;
	border: none;
	display: block;
	max-width: 100%;
}
.grid.effect-2 .item.animate {
	-webkit-transform: translateY(200px);
	transform: translateY(200px);
	-webkit-animation: moveUp 0.65s ease forwards;
	animation: moveUp 0.65s ease forwards;
}

@-webkit-keyframes moveUp {
	0% { }
	100% { -webkit-transform: translateY(0); opacity: 1; }
}

@keyframes moveUp {
	0% { }
	100% { -webkit-transform: translateY(0); transform: translateY(0); opacity: 1; }
}
@media screen and (max-width: 900px) {
	.grid .item {width: 50%;}
  .entry {box-shadow: none;}
  .entry > .grid > .item {width: 50%;}
}

@media screen and (max-width: 400px) {
	.grid .item {width: 100%;}
  .entry {padding: 20px 0;}
  .entry > p {padding: 10px;}
  .entry > .grid > .item {width: 100%;}
}


	</style>
</head>
<body>
<h2>Masonry Gallery</h2>
<div class="grid effect-2" id="grid">
    <div class="item"><a href="#"><img src="https://goo.gl/NiXtS3" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/bybkCD" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/g5jr1N" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/Akx3Oh" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/oyBrGp" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/iUOjWW" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/H9xGFt" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/BZ6Uiv" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/TALyhb" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/QO52Sd" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/NiXtS3" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/bybkCD" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/g5jr1N" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/Akx3Oh" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/oyBrGp" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/iUOjWW" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/H9xGFt" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/BZ6Uiv" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/TALyhb" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/QO52Sd" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/BZ6Uiv" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/TALyhb" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/QO52Sd" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/NiXtS3" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/bybkCD" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/g5jr1N" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/Akx3Oh" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/oyBrGp" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/iUOjWW" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/H9xGFt" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/BZ6Uiv" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/TALyhb" alt="" /></a></div>
    <div class="item"><a href="#"><img src="https://goo.gl/QO52Sd" alt="" /></a></div>
</div>
<div class="entry">
<h2>Masonry Gallery Post</h2>
<time>12:48</time>
<p>Lorem ipsum ad his scripta blandit partiendo,  eum fastidii accumsan euripidis in,  eum liber hendrerit an.  Qui ut wisi vocibus suscipiantur,  quo dicit ridens inciderint id.  Quo mundi lobortis reformidans eu,  legimus senserit definiebas an eos.  Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per.  In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.</p>
<div class="grid" id="grid2">
    <img src="https://goo.gl/NiXtS3" alt="" />
    <img src="https://goo.gl/bybkCD" alt="" />
    <img src="https://goo.gl/g5jr1N" alt="" />
    <img src="https://goo.gl/Akx3Oh" alt="" />
</div>
<p>Lorem ipsum ad his scripta blandit partiendo,  eum fastidii accumsan euripidis in,  eum liber hendrerit an.  Qui ut wisi vocibus suscipiantur, ut fugit veritus placerat per.</p>
<img src="https://goo.gl/Akx3Oh" alt="" />
</div>
</body>
</html>